<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PvWithDrawalRequestHistory extends Model
{
    use HasFactory;


    const PENDING = 0;
    const APPROVE = 2;

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $guarded = [];

    public function getStatusAttribute($value)
    {
        if ($value == self::PENDING) {
            return 'pending';
        } elseif ($value == self::APPROVE) {
            return 'approved';
        } else {
            return 'cancelled';
        }
    }

    public function scopeSearch($query, $search)
    {
        return $query->orWhereHas('user', function ($query) use ($search) {
            $query->where('nickname', 'like', '%' . $search . '%')
                ->orWhere('user_id', 'like', '%' . $search . '%');
        });
    }



}