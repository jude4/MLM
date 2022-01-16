<?php

use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('create superadmin', function () {
    $admin = Admin::create([
        'admin_id' => 'administrator',
        'password' => Hash::make('password'),
        'name' => 'super admin',
        'department' => 'Management',
        'status' => true,
        'mobile' => '+2348160262187',
        'is_super' => true,
    ]);

    User::factory(10)->create();
    $this->comment('first administrator has been setup');
})->purpose('Setup the admin');


