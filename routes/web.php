<?php

use App\Http\Livewire\Auth\User\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

require __DIR__ . '/admin.php';
require __DIR__ . '/user.php';

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::redirect('/', '/login');




// Route::get('/login', function () {
//     return view('auth.user.login');
// })->name('login');



Route::get('/register', Register::class)->name('register');
