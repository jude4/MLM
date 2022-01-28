<?php

use App\Http\Controllers\Admin\MemberTreeStructureController;
use App\Http\Controllers\Admin\PvTransmissionApplicationController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->name('admin.')->middleware('web', 'admin.auth')->namespace('Admin')->group(function () {

    // Administrator routes
    Route::get('/dashboard', [AdminController::class, 'administratorList'])->name('administratorlist');

    Route::get('/admin-management/{id}', [AdminController::class, 'adminManagement'])->name('adminmanagement');
    Route::post('/admin-management/edit/profile', [AdminController::class, 'editAdmin'])->name('edit.admin');

    Route::get('/administrator_registration', function () {
        return view('admin.administrator_registration');
    })->name('administratorregistration');

    Route::post('/administrator_register_admin', [AdminController::class, 'registerAdmin'])->name('register.admin');

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

    Route::get('/t_point_details_by_member', [AdminController::class, 'tPointDetailsByMember'])->name('tpointdetailsbymember');

    Route::get('/trading_order', function () {
        return view('admin.trading_order_history');
    })->name('tradingorderhistory');

    Route::get('/trading_setting', [AdminController::class, 'tradingSettings'])->name('tradingsetting');
    Route::post('/set/trading_setting', [AdminController::class, 'setTradingSettings'])->name('settradingsetting');

    Route::get('/mlm_user_management', function () {
        return view('admin.mlm_user_management');
    })->name('mlmusermanagement');

    Route::get('/admin_management_edit', function () {
        return view('admin.admin_management_edit');
    })->name('adminmanagementedit');

    Route::get('/pv_transmission_application_details', function () {
        return view('admin.pv_transmission_application_details');
    })->name('pvtransmissionapplicationdetails');

    Route::get('/member-tree-structure/{id}', [MemberTreeStructureController::class, '__invoke'])->name('member-tree-sturcture');

    Route::get('/pv_transmission_application_details/approve/{id}',[PvTransmissionApplicationController::class, 'approve'])->name('pvtransmissionapplicationdetails.approve');
    Route::get('/pv_transmission_application_details/decline/{id}',[PvTransmissionApplicationController::class, 'decline'])->name('pvtransmissionapplicationdetails.decline');
    
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
});

Route::get('/admin/login', [AdminAuthController::class, 'getLogin'])->name('admin.login')->withoutMiddleware('guest');

Route::post('/admin/login', [AdminAuthController::class, 'postLogin'])->name('admin.login.post')->withoutMiddleware('guest');