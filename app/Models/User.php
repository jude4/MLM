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

    protected function getElimPointsAttribute($value)
    {
        return number_format($value);
    }
    

    protected function getTPointsAttribute($value)
    {
        return number_format($value);
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

    public function inquiries()
    {
        return $this->hasMany(Inquiry::class);
    }

    public function parent() : BelongsTo
    {
        return $this->belongsTo(User::class, 'referred_by') ;
    }

    public function children() : HasMany
    {
        return $this->hasMany(User::class, 'referred_by');
    }

    public function giveParentById($id)
    {
        $user = self::find($id);
        if($user->children()->count() < self::MAX_CHILDREN){
            $this->referred_by = $id;
            return $this->save();
        } else {
            return false;
        }
    }

    public function makeChildById($id)
    {
        $child = self::find($id);
        if (empty($child->referred_by) && $this->children()->count() < self::MAX_CHILDREN) {
            $child->referred_by = $this->id;
            return $child->save();
        } else {
            return false;
        }
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
        return $this->children()->first() ?? new FakeUser;
    }

    public function lastChild()
    {       
        return $this->children->count() >= 2? $this->children()->get()[1]: new FakeUser;
    }
}