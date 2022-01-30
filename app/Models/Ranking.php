<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Ranking extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public static function thisMonthsRanking()
    {
        $carbon = new Carbon();
        return self::where('created_at', '>=', $carbon->firstOfMonth()->toDateTimeString())
        ->orderBy('yield', 'DESC')
        ->limit(12)
        ->get();
    }

    public static function overallRanking()
    {
        return self::orderBy('yield', 'DESC')
        ->limit(12)
        ->get();
    }
}
