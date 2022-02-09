<?php

use App\Http\Controllers\Admin\MemberTreeStructureController;
use App\Http\Controllers\Admin\PvTransmissionApplicationController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->name('admin.')->middleware('web', 'admin.auth')->namespace('Admin')->group(function () {

    // Administrator routes
    Route::get('/dashboard', [AdminController::class, 'administratorList'])->name('administratorlist');
    Route::get('/administrator_search', [AdminController::class, 'administrator_search'])->name('search.administrator');
    Route::get('/datatable_administratorlist', [AdminController::class, 'datatable_administratorlist'])->name('datatable_administratorlist');

    Route::get('/admin-management/{id}', [AdminController::class, 'adminManagement'])->name('adminmanagement');
    Route::post('/admin-management/edit/profile', [AdminController::class, 'editAdmin'])->name('edit.admin');
    Route::post('/add_administrator_permission', [AdminController::class, 'add_administrator_permission'])->name('add.administrator_permission');
    Route::post('/remove_administrator_permission', [AdminController::class, 'remove_administrator_permission'])->name('remove.administrator_permission');
    Route::post('/change_administrator_permission', [AdminController::class, 'change_administrator_permission'])->name('change.administrator_permission');

    Route::get('/administrator_registration', function () {
        return view('admin.administrator_registration');
    })->name('administratorregistration');

    Route::post('/administrator_register_admin', [AdminController::class, 'registerAdmin'])->name('register.admin');

    Route::get('/elim_point_application_details', function () {
        return view('admin.elim_point_application_details');
    })->name('elimpointapplicatondetails');
    Route::get('/datatable_point_recharge_list', [AdminController::class, 'datatable_point_recharge_list'])->name('datatable_point_recharge_list');
    Route::get('/view_elim_recharge_detail', [AdminController::class, 'view_elim_recharge_detail'])->name('view_elim_recharge_detail');
    Route::post('/elim_recharge_action', [AdminController::class, 'elim_recharge_action'])->name('elim_recharge_action');
    Route::get('/elim_point_recharge_search', [AdminController::class, 'elim_point_recharge_search'])->name('search.elim_point_recharge_search');


    Route::get('/elim_point_exchange_history', function () {
        return view('admin.elim_point_exchange_history');
    })->name('elimpointapplicatiionhistory');
    Route::get('/datatable_point_exchange_list', [AdminController::class, 'datatable_point_exchange_list'])->name('datatable_point_exchange_list');
    Route::get('/view_elim_point_exchange_detail', [AdminController::class, 'view_elim_point_exchange_detail'])->name('view_elim_point_exchange_detail');
    Route::get('/elim_point_exchange_search', [AdminController::class, 'elim_point_exchange_search'])->name('search.elim_point_exchange_search');

    Route::get('/elim_point_transfer_history', function () {
        return view('admin.elim_point_transfer_history');
    })->name('elimpointtransferhistory');
    Route::get('/datatable_point_transfer_list', [AdminController::class, 'datatable_point_transfer_list'])->name('datatable_point_transfer_list');
    Route::get('/view_elim_point_transfer_detail', [AdminController::class, 'view_elim_point_transfer_detail'])->name('view_elim_point_transfer_detail');
    Route::get('/elim_point_transfer_search', [AdminController::class, 'elim_point_transfer_search'])->name('search.elim_point_transfer_search');


    Route::get('/faq_list', [AdminController::class, 'faqList'])->name('faqlist');
    Route::get('/datatable_faq_list', [AdminController::class, 'datatable_faq_list'])->name('datatable_faq_list');
    Route::post('/faq/create', [AdminController::class, 'createFaq'])->name('create.faq');
    Route::post('/faq/modify', [AdminController::class, 'modifyFaq'])->name('modify.faq');
    Route::get('/faq_modification/{id}', [AdminController::class, 'faqModification'])->name('faqmodification');
    Route::get('/faq_search', [AdminController::class, 'faq_search'])->name('search.faq');

    Route::get('/faq_register', function () {
        return view('admin.faq_register');
    })->name('faqregister');

    Route::get('/member_list', [AdminController::class, 'memberList'])->name('memberlist');
    Route::get('/datatable_member_list', [AdminController::class, 'datatable_member_list'])->name('datatable_member_list');
    Route::get('/member_modification/{id}', [AdminController::class, 'memberModification'])->name('membermodification');
    Route::post('/member_update', [AdminController::class, 'member_update'])->name('update.member');
    Route::get('/member_search', [AdminController::class, 'member_search'])->name('search.member');

    Route::get('/notice_list', [AdminController::class, 'noticeList'])->name('noticelist');
    Route::get('/datatable_notice_list', [AdminController::class, 'datatable_notice_list'])->name('datatable_notice_list');
    Route::post('/notice/create', [AdminController::class, 'createNotice'])->name('create.notice');
    Route::get('/notice_search', [AdminController::class, 'notice_search'])->name('search.notice');

    Route::get('/notice_modification/{id}', [AdminController::class, 'noticeModification'])->name('noticemodification');
    Route::post('/notice/modify', [AdminController::class, 'modifyNotice'])->name('modify.notice');

    Route::get('/notice_register', [AdminController::class, 'noticeRegister'])->name('noticeregister');

    Route::get('/one_on_one_inquiry_answer/{id}', [AdminController::class, 'oneOnOneInquiryAnswer'])->name('oneononeinquiryanswer');
    Route::post('/one_on_one_inquiry_answer/reply', [AdminController::class, 'replyOneOnOneInquiry'])->name('reply.oneononeinquiry');
    Route::get('/one_on_one_inquiry', [AdminController::class, 'oneOnOneInquiry'])->name('oneononeinquiry');
    Route::get('/datatable_oneononeinquiry_list', [AdminController::class, 'datatable_oneononeinquiry_list'])->name('datatable_oneononeinquiry_list');
    Route::get('/one_on_one_inquiry_search', [AdminController::class, 'one_on_one_inquiry_search'])->name('search.oneononeinquiry');

    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('profile.update');

    Route::get('/pv_accumulation_history', function () {
        return view('admin.pv_accumulation_history');
    })->name('pvaccumulationhistory');
    Route::get('/datatable_pv_accumulation_history_list', [AdminController::class, 'datatable_pv_accumulation_history_list'])->name('datatable_pv_accumulation_history_list');
    Route::get('/pv_accumulation_history_search', [AdminController::class, 'pv_accumulation_history_search'])->name('search.pvaccumulationhistory');

    Route::get('/pv_conversion_applicaton_details', function () {
        return view('admin.pv_conversion_application_details');
    })->name('pvconversionapplicationdetails');
    Route::get('/datatable_pv_conversion_application_detail', [AdminController::class, 'datatable_pv_conversion_application_detail'])->name('datatable_pv_conversion_application_detail');
    Route::get('/particular_pv_conversion_detail', [AdminController::class, 'particular_pv_conversion_detail'])->name('particularpvconversiondetail');
    Route::post('/pv_conversion_application_action', [AdminController::class, 'pv_conversion_application_action'])->name('pvconversionapplicationaction');
    Route::get('/particular_pv_conversion_detail_search', [AdminController::class, 'particular_pv_conversion_detail_search'])->name('search.pvconversionapplicationdetail');


    Route::get('/pv_usage_history', function () {
        return view('admin.pv_usage_history');
    })->name('pvusagehistory');
    Route::get('/datatable_pv_usage_history_list', [AdminController::class, 'datatable_pv_usage_history_list'])->name('datatable_pv_usage_history_list');
    Route::get('/pv_usage_history_search', [AdminController::class, 'pv_usage_history_search'])->name('search.pvusagehistory');

    Route::get('/pv_withdrawal_request_history', function () {
        return view('admin.pv_withdrawal_request_history');
    })->name('pvwithdrawalrequesthistory');
    Route::get('/datatable_pv_withdrawal_history_list', [AdminController::class, 'datatable_pv_withdrawal_history_list'])->name('datatable_pv_withdrawal_history_list');
    Route::get('/pv_withdrawal_request_history_search', [AdminController::class, 'pv_withdrawal_request_history_search'])->name('search.pvwithdrawalrequesthistory');
    Route::post('/pv_withdrawal_request_history_action', [AdminController::class, 'pv_withdrawal_request_history_action'])->name('pvwithdrawalaction');
    Route::get('/pv_withdrawal_request_detail', [AdminController::class, 'pv_withdrawal_request_detail'])->name('pvwithdrawalrequestdetail');

    Route::get('/t_point_details_by_member', [AdminController::class, 'tPointDetailsByMember'])->name('tpointdetailsbymember');
    Route::get('/datatable_t_point_member', [AdminController::class, 'datatable_t_point_member'])->name('datatable_t_point_member');
    Route::get('/t_point_member_search', [AdminController::class, 't_point_member_search'])->name('search.t_point_member_search');

    Route::get('/trading_order', function () {
        return view('admin.trading_order_history');
    })->name('tradingorderhistory');
    Route::get('/datatable_trading_order_table', [AdminController::class, 'datatable_trading_order_table'])->name('datatable_trading_order_table');
    Route::get('/trading_order_history', [AdminController::class, 'trading_order_history'])->name('search.trading_order_history');
    Route::post('trade_action', [AdminController::class, 'trade_action'])->name('trade_action');

    Route::get('/trading_setting', [AdminController::class, 'tradingSettings'])->name('tradingsetting');
    Route::post('/set/trading_setting', [AdminController::class, 'setTradingSettings'])->name('settradingsetting');

    Route::get('/mlm_user_management', function () {
        return view('admin.mlm_user_management');
    })->name('mlmusermanagement');
    Route::get('/mlm_member_search', [AdminController::class, 'mlm_member_search'])->name('search.mlm_member');
    Route::get('/datatable_mlmmemberlist', [AdminController::class, 'datatable_mlmmemberlist'])->name('datatable_mlmmemberlist');

    Route::get('/admin_management_edit', function () {
        return view('admin.admin_management_edit');
    })->name('adminmanagementedit');

    Route::get('/pv_transmission_application_details', function () {
        return view('admin.pv_transmission_application_details');
    })->name('pvtransmissionapplicationdetails');
    Route::get('/datatable_pv_transmission_application_detail', [AdminController::class, 'datatable_pv_transmission_application_detail'])->name('datatable_pv_transmission_application_detail');
    Route::post('/pv_transmission_application_action', [AdminController::class, 'pv_transmission_application_action'])->name('pvtransmissionapplicationaction');
    Route::get('/transmission_application_detail_search', [AdminController::class, 'transmission_application_detail_search'])->name('search.transmissionapplicationdetail');
    Route::get('/particul_transmission_application_detail', [AdminController::class, 'particul_transmission_application_detail'])->name('particultransmissionapplicationdetail');

    Route::get('/member-tree-structure/{id}', [MemberTreeStructureController::class, '__invoke'])->name('member-tree-sturcture');

    Route::get('/pv_transmission_application_details/approve/{id}',[PvTransmissionApplicationController::class, 'approve'])->name('pvtransmissionapplicationdetails.approve');
    Route::get('/pv_transmission_application_details/decline/{id}',[PvTransmissionApplicationController::class, 'decline'])->name('pvtransmissionapplicationdetails.decline');
    
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
});

Route::get('/admin/login', [AdminAuthController::class, 'getLogin'])->name('admin.login')->withoutMiddleware('guest');

Route::post('/admin/login', [AdminAuthController::class, 'postLogin'])->name('admin.login.post')->withoutMiddleware('guest');