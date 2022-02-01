<?php

namespace App\Models;

use App\Traits\Stateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PvConversionApplication extends Model
{
    use HasFactory, Stateable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function approve()
    {
        $user = User::find($this->user_id);
        
        if($this->type == 'available'){
            $user->elim_points = (int) $user->elim_points + (int) $this->amount;
            $user->available_pv = (int) $user->available_pv - (int) $this->amount - (int) $this->fee;
            
        }else{
            $user->elim_points = (int) $user->elim_points + (int) $this->amount;
            $user->earned_pv = (int) $user->earned_pv - (int) $this->amount - (int) $this->fee;
            
        }

        $user->save();
        $this->status=2;
        $this->save();
    }

    public function decline()
    {
        $this->status = 1;
        $this->save();
    }

    
    public function scopeSearch($query, $search)
    {
        return $query->orWhereHas('user', function ($query) use ($search) {
            $query->where('nickname', 'like', '%' . $search . '%')
                ->orWhere('user_id', 'like', '%' . $search . '%');
            });
    }
}
