<?php

use App\Http\Controllers\User\ElimPointDepositInformationController;
use App\Http\Controllers\User\RestartTradeController;
use App\Http\Controllers\User\SuspendTradeController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Auth\User\FindId;
use App\Http\Livewire\Auth\User\FindPassword;
use Illuminate\Support\Facades\Route;

Route::prefix('/user')->name('user.')->middleware('auth')->namespace('User')->group(function () {
    // User Routes
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('/trading', function () {
        return view('user.trading');
    })->name('trading');

    Route::get('/trading-history', function () {
        return view('user.trading_history');
    })->name('tradinghistory');

    Route::get('/suspend-trade/{id}/{subject}', [SuspendTradeController::class, 'suspendTrade'])->name('suspend-trade');
    Route::get('/restart-trade/{id}/{subject}', [RestartTradeController::class, 'restartTrade'])->name('restart-trade');

    Route::get('/first-inquiry', [UserController::class, 'firstInquiry'])->name('firstinquiry');

    Route::get('/faq', function () {
        return view('user.faq');
    })->name('faq');

    Route::get('/service_center_registration', [UserController::class, 'serviceCenterRegistration'])->name('servicecenterregistration');

    Route::post('/inquiry/create', [UserController::class, 'createInquiry'])->name('create.inquiry');

    Route::get('/service_center_detail/{id}', [UserController::class, 'serviceCenterDetail'])->name('servicecenterdetail');

    Route::get('/service_center_view_answer', function () {
        return view('user.service_center_view_answer');
    })->name('serviccenterviewname');

    Route::get('/service_center', [UserController::class, 'serviceCenter'])->name('servicecenter');

    Route::get('/ranking', function () {
        return view('user.ranking');
    })->name('ranking');

    Route::get('/my_point', function () {
        return view('user.my_point');
    })->name('mypoint');

    Route::get('/my_point_send', function () {
        return view('user.my_point_send');
    })->name('mypointsend');

    Route::get('/elim_point_charge', function () {
        return view('user.elim_point_recharge');
    })->name('elimpointcharge');

    Route::get('/my_point_list', function () {
        return view('user.my_point_list');
    })->name('mypointlist');

    Route::get('/my_point_t_list', function () {
        return view('user.my_point_t_list');
    })->name('mypointtlist');

    Route::get('/my_point_exchange', function () {
        return view('user.my_point_exchange');
    })->name('mypointexchange');

    Route::get('/elim_point_view_detail/{amount}', function ($amount) {
        return view('user.elim_point_view_detail', compact('amount'));
    })->name('elimpointviewdetail');

    Route::get('/elim_point_deposit_information/{id}', [ElimPointDepositInformationController::class, 'show'])->name('elimpointdepositinformation');
    Route::get('/cancel/elim_point_deposit/{id}', [ElimPointDepositInformationController::class, 'cancel'])->name('cancel.elimpointdepositinformation');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/profile/update', [UserController::class, 'profileUpdate'])->name('profile.update');


    Route::get('/krw_withdrawal_request', function () {
        return view('user.krw_withdrawal_request');
    })->name('krwwithdrawalrequest');

    Route::get('/pv_check_accumulation_history', [UserController::class, 'pvAccumulationHistory'])->name('pvcheckaccumulationhistory');

    Route::get('/pv_check_usage_history', [UserController::class, 'pvUsageHistory'])->name('pvcheckusagehistory');

    Route::get('/pv_my_tree', [UserController::class, 'pvMyTree'])->name('pvmytree');

    Route::get('/krw_application_list', function () {
        return view('user.krw_application_list');
    })->name('krwapplicationlist');

    Route::get('/pv_transfer', function () {
        return view('user.pv_transfer');
    })->name('pvtransfer');

    Route::get('/pv_transfer_request_list', function () {
        return view('user.pv_transfer_request_list');
    })->name('pvtransferrequestlist');

    Route::get('/pv_exchange_available_elim_point', function () {
        return view('user.pv_exchange_available_elim_point');
    })->name('pvexchangeavailableelimpoint');

    Route::get('/pv_exchange_accumulation_elim_point', function () {
        return view('user.pv_exchange_accumulation_elim_point');
    })->name('pvexchangeaccumulationelimpoint');
});

//User Auth routes
Route::get('/find_id', FindId::class)->name('user.findid');

Route::post('/find_id_result', [UserController::class, 'findResult'])->name('user.findidresult');

Route::get('/find_password', FindPassword::class)->name('user.findpassword');