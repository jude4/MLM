<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class AdminLog extends Model
{
    use HasFactory;

    
       /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'admin_id',
        'created_at',
        'updated_at',
        'logged_out',
    ];
    
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'logged_out' => 'datetime',
    ];

    public static function logout($id){
        $log = self::find($id);
        if($log){
            $log->logged_out = Carbon::now();
            $log->save();
        }
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
