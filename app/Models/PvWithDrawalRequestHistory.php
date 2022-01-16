<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PvWithDrawalRequestHistory extends Model
{
    use HasFactory;


    const PENDING = 0;
    const COMPLETED = 1;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $guarded = [];

    public function getStatusAttribute($value)
    {
        return $value == self::PENDING ? 'pending' : 'completed';
    }

    public function scopeSearch($query, $search)
    {
        return $query->orWhereHas('user', function ($query) use ($search) {
            $query->where('nickname', 'like', '%' . $search . '%')
                ->orWhere('user_id', 'like', '%' . $search . '%');
        });
    }



}
