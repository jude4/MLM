<?php

namespace App\Models;

use Attribute;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public const MAX_CHILDREN = 2;

    public const GENERAL_MEMBER = 0;
    public const MLM_MEMBER = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'nickname',
        'email',
        'elim_points',
        't_points',
        'available_pv',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'status' => 'boolean',
    ];

    public function totalPv()
    {
        return number_format($this->available_pv + $this->earned_pv);
    }

    protected function getElimPointsAttribute($value)
    {
        return number_format($value);
    }
    

    protected function getTPointsAttribute($value)
    {
        return number_format($value);
    }

    public function getTypeAttribute($value)
    {
        if ($value == self::GENERAL_MEMBER) {
            return 'General Member';
        } else {
            return 'MLM Member';
        }
    }


    public static function uuidExists($id){
        return self::where('user_id', '=', $id)->first()? true : false; 
    }

    public static function generateUUID(){
        $unique_id = "ELIM". rand(1000000, 9999999);
        return self::uuidExists($unique_id)? self::generateUUID(): $unique_id;
    }

    public function profilePicture()
    {
        return !empty($this->image)? $this->image: 'image/icon/user.png';
    }

    public function clearProfilePicture()
    {
        $this->image = null;
        $this->save();
    }

    public function resale()
    {
        $value = 200000;
        if ($this->isEligibleForResale()) {
            $this->earned_pv = (int) $this->earned_pv - $value;
            $this->available_pv = (int) $this->available_pv + $value;
            $this->resale = true;
            return $this->save();
        }else{
            return false;
        }
    }

    public function isEligibleForResale()
    {
        return $this->resale == false && $this->earned_pv >= 250000;
    }

    public function inquiries()
    {
        return $this->hasMany(Inquiry::class);
    }

    public function parent()
    {
        return $this->referred_by? self::findOrFail($this->referred_by): new FakeUser;
    }

    public function children() : HasMany
    {
        return $this->hasMany(User::class, 'referred_by');
    }

    public function giveParentById($id)
    {
        $user = self::find($id);
        $user->makeChildById($this->id);
    }

    public function makeChildById($id)
    {
        $child = self::find($id);
        if (empty($child->referred_by) && $this->children()->count() < self::MAX_CHILDREN) {
            $child->referred_by = $this->id;
            $child->rewardParents();
            return $child->save();
        } else {
            return $child->passToChild($id);
        }
    }

    public function rewardParents()
    {
        $value= 400000;
        $this->nthParent(1)->rewardPv($value*0.5);
        $this->nthParent(2)->rewardPv($value*0.1);
        $this->nthParent(3)->rewardPv($value*0.05);
        $this->nthParent(4)->rewardPv($value*0.04);
        $this->nthParent(5)->rewardPv($value*0.03);
        $this->nthParent(6)->rewardPv($value*0.02);
        $this->nthParent(7)->rewardPv($value*0.01);
    }

    public function rewardPv($value)
    {
        $this->earned_pv = (int) $this->earned_pv + (int) $value;
        return $this->save();
    }


    public function passToChild($id)
    {
        $this->children[rand(0,1)]->makeChildById($id);
    }

    public function firstChildExists()
    {
        return !is_a($this->firstChild(), FakeUser::class);
    }

    public function lastChildExists()
    {
        return !is_a($this->lastChild(), FakeUser::class);
    }

    public function firstChild()
    {
        return $this->children()->latest()->first() ?? new FakeUser;
    }

    public function lastChild()
    {       
        return $this->children->count() >= 2? $this->children()->latest()->get()[1]: new FakeUser;
    }

    public function nthParent(int $n)
    {
        if($n <= 1){
            return $this->parent();
        } 
        return $this->parent()->nthParent($n - 1);
    }
}