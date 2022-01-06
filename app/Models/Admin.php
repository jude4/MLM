<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'admin_id',
        'name',
        'department',
        'password',
        'status',
        'last_login',
        'mobile',
        'is_super'
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
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'is_super' => 'boolean',
    ];

    public function logs()
    {
        return $this->hasMany(AdminLog::class);
    }

    public static function saveLogoutTransaction($id){
        $admin = Admin::find($id);
        AdminLog::logout(session('log_id'));
    }

    public function createLoginLog()
    {
        $this->last_login=Carbon::now();
        $this->save();

        $log = new AdminLog();
        $log->admin_id = $this->id;
        $log->save();
        $id = $log->id;
        session(['log_id' => $id]);
    }


}
