<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;


    public static function thatHasCategory($category = 'normal')
    {
        return self::where('category', $category)->where('used', true)->get();
    }
}
