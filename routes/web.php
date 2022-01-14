<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Auth\User\FindId;
use App\Http\Livewire\Auth\User\FindPassword;
use App\Http\Livewire\Auth\User\Register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::redirect('/', '/login');

Route::prefix('/user')->name('user.')->middleware('auth')->namespace('User')->group(function () {
// User Routes
Route::get('/dashboard', function () {
    return view('user.dashboard');
})->name('dashboard');

Route::get('/trading', function () {
    return view('user.trading');
})->name('trading');

Route::get('/trading-history', function () {
    return view('user.trading_history');
})->name('tradinghistory');

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

Route::get('/service_center',[UserController::class, 'serviceCenter'])->name('servicecenter');

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

Route::get('/elim_point_view_detail', function () {
    return view('user.elim_point_view_detail');
})->name('elimpointviewdetail');

Route::get('/elim_point_deposit_information', function () {
    return view('user.elim_point_deposit_information');
})->name('elimpointdepositinformation');

Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/profile/update', [UserController::class, 'profileUpdate'])->name('profile.update');


Route::get('/krw_withdrawal_request', function () {
    return view('user.krw_withdrawal_request');
})->name('krwwithdrawalrequest');

Route::get('/pv_check_accumulation_history', function () {
    return view('user.pv_check_accumulation_history');
})->name('pvcheckaccumulationhistory');

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
})->name('pvexchangeaccumulaionelimpoint');



});

//User Auth routes
Route::get('/find_id', FindId::class)->name('user.findid');

Route::post('/find_id_result', [UserController::class, 'findResult'])->name('user.findidresult');

Route::get('/find_password', FindPassword::class)->name('user.findpassword');



// Route::get('/login', function () {
//     return view('auth.user.login');
// })->name('login');



Route::get('/register', Register::class)->name('register');


Route::prefix('/admin')->name('admin.')->middleware('web', 'admin.auth')->namespace('Admin')->group(function () {

    // Administrator routes
    Route::get('/dashboard', [AdminController::class, 'administratorList'])->name('administratorlist');

    Route::get('/admin-management/{id}', [AdminController::class, 'adminManagement'])->name('adminmanagement');
    Route::post('/admin-management/edit/profile', [AdminController::class, 'editAdmin'])->name('edit.admin');

    Route::get('/administrator_registration', function () {
        return view('admin.administrator_registration');
    })->name('administratorregistration');

    Route::get('/elim_point_application_details', function () {
        return view('admin.elim_point_application_details');
    })->name('elimpointapplicatondetails');

    Route::get('/elim_point_exchange_history', function () {
        return view('admin.elim_point_exchange_history');
    })->name('elimpointapplicatiionhistory');

    Route::get('/elim_point_transfer_history', function () {
        return view('admin.elim_point_transfer_history');
    })->name('elimpointtransferhistory');

    Route::get('/faq_list', [AdminController::class, 'faqList'])->name('faqlist');

    Route::post('/faq/create', [AdminController::class, 'createFaq'])->name('create.faq');

    Route::post('/faq/modify', [AdminController::class, 'modifyFaq'])->name('modify.faq');

    Route::get('/faq_modification/{id}', [AdminController::class, 'faqModification'])->name('faqmodification');

    Route::get('/faq_register', function () {
        return view('admin.faq_register');
    })->name('faqregister');

    Route::get('/member_list', [AdminController::class, 'memberList'])->name('memberlist');

    Route::get('/member_modification/{id}', [AdminController::class, 'memberModification'])->name('membermodification');

    Route::get('/notice_list', [AdminController::class, 'noticeList'])->name('noticelist');
    Route::post('/notice/create', [AdminController::class, 'createNotice'])->name('create.notice');

    Route::get('/notice_modification/{id}', [AdminController::class, 'noticeModification'])->name('noticemodification');
    Route::post('/notice/modify', [AdminController::class, 'modifyNotice'])->name('modify.notice');

    Route::get('/notice_register', [AdminController::class, 'noticeRegister'])->name('noticeregister');

    Route::get('/one_on_one_inquiry_answer/{id}', [AdminController::class, 'oneOnOneInquiryAnswer'])->name('oneononeinquiryanswer');
    Route::post('/one_on_one_inquiry_answer/reply', [AdminController::class, 'replyOneOnOneInquiry'])->name('reply.oneononeinquiry');

    Route::get('/one_on_one_inquiry', [AdminController::class, 'oneOnOneInquiry'])->name('oneononeinquiry');

    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('profile.update');

    Route::get('/pv_accumulation_history', function () {
        return view('admin.pv_accumulation_history');
    })->name('pvaccumulationhistory');

    Route::get('/pv_conversion_applicaton_details', function () {
        return view('admin.pv_conversion_application_details');
    })->name('pvconversionapplicationdetails');

    Route::get('/pv_usage_history', function () {
        return view('admin.pv_usage_history');
    })->name('pvusagehistory');

    Route::get('/pv_withdrawal_request_history', function () {
        return view('admin.pv_withdrawal_request_history');
    })->name('pvwithdrawalrequesthistory');

    Route::get('/t_point_details_by_member', function () {
        return view('admin.t_point_details_by_member');
    })->name('tpointdetailsbymember');

    Route::get('/trading_order', function () {
        return view('admin.trading_order_history');
    })->name('tradingorderhistory');

    Route::get('/trading_setting', function () {
        return view('admin.trading_setting');
    })->name('tradingsetting');

    Route::get('/mlm_user_management', function () {
        return view('admin.mlm_user_management');
    })->name('mlmusermanagement');

    Route::get('/admin_management_edit', function () {
        return view('admin.admin_management_edit');
    })->name('adminmanagementedit');

    Route::get('/pv_transmission_application_details', function () {
        return view('admin.pv_transmission_application_details');
    })->name('pvtransmissionapplicationdetails');

    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
});

Route::get('/admin/login', [AdminAuthController::class, 'getLogin'])->name('admin.login')->withoutMiddleware('guest');

Route::post('/admin/login', [AdminAuthController::class, 'postLogin'])->name('admin.login.post')->withoutMiddleware('guest');