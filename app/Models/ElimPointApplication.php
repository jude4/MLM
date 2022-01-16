<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ElimPointApplication extends Model
{
    use HasFactory;

    protected $guarded = [];

 

    const PENDING = 0;
    const CANCELLATION = 1;
    const APPROVED = 2;


    public function getAmountAttribute($value)
    {
        return number_format($value);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->orWhereHas('user', function ($query) use ($search) {
            $query->where('nickname', 'like', '%' . $search . '%')
                ->orWhere('user_id', 'like', '%' . $search . '%');
        });
    }
}