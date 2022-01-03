<?php

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


// User Routes
Route::get('/', function () {
    return view('user.dashboard');
})->name('user.dashboard');

Route::get('/trading', function () {
    return view('user.trading');
})->name('user.trading');

Route::get('/trading-history', function () {
    return view('user.trading_history');
})->name('tradinghistory');

Route::get('/first-inquiry', function () {
    return view('user.first_inquiry');
})->name('user.firstinquiry');

Route::get('/faq', function(){
    return view('user.faq');
})->name('user.faq');

Route::get('/service_center_registration', function () {
    return view('user.service_center_registration');
})->name('user.servicecenterregistration');

Route::get('/service_center_detail', function () {
    return view('user.service_center_detail');
})->name('user.servicecenterdetail');

Route::get('/service_center_view_answer', function () {
    return view('user.service_center_view_answer');
})->name('user.serviccenterviewname');

Route::get('/service_center', function () {
    return view('user.service_center');
})->name('user.servicecenter');

Route::get('/ranking', function () {
    return view('user.ranking');
})->name('user.ranking');

Route::get('/my_point', function () {
    return view('user.my_point');
})->name('user.mypoint');

Route::get('/my_point_send', function () {
    return view('user.my_point_send');
})->name('mypointsend');

Route::get('/elim_point_charge', function () {
    return view('user.elim_point_recharge');   
})->name('user.elimpointcharge');

Route::get('/my_point_list', function () {
    return view('user.my_point_list');
})->name('user.mypointlist');

Route::get('/my_point_t_list', function () {
    return view('user.my_point_t_list');
})->name('user.mypointtlist');

Route::get('/my_point_exchange', function () {
    return view('user.my_point_exchange');
})->name('user.mypointexchange');

Route::get('/elim_point_view_detail', function () {
    return view('user.elim_point_view_detail');
})->name('user.elimpointviewdetail');

Route::get('/elim_point_deposit_information', function () {
    return view('user.elim_point_deposit_information');
})->name('user.elimpointdepositinformation');

Route::get('/profile', function () {
    return view('user.profile');
})->name('user.profile');

Route::get('/krw_withdrawal_request', function () {
    return view('user.krw_withdrawal_request');
})->name('user.krwwithdrawalrequest');

Route::get('/pv_check_accumulation_history', function () {
   return view('user.pv_check_accumulation_history'); 
})->name('user.pvcheckaccumulationhistory');

Route::get('/pv_my_tree', function () {
    return view('user.pv_my_tree');
})->name('user.pvmytree');

Route::get('/krw_application_list', function () {
    return view('user.krw_application_list');
})->name('user.krwapplicationlist');

Route::get('/pv_transfer', function () {
    return view('user.pv_transfer');
})->name('user.pvtransfer');

Route::get('/pv_transfer_request_list', function () {
    return view('user.pv_transfer_request_list');
})->name('user.pvtransferrequestlist');

Route::get('/pv_exchange_available_elim_point', function () {
    return view('user.pv_exchange_available_elim_point');
})->name('user.pvexchangeavailableelimpoint');

Route::get('/pv_exchange_accumulation_elim_point', function () {
    return view('user.pv_exchange_accumulation_elim_point');
})->name('user.pvexchangeaccumulaionelimpoint');

//User Auth routes
Route::get('/find_id', function () {
    return view('auth.user.find_id');
})->name('user.findid');

Route::get('/find_id_result', function () {
    return view('auth.user.find_id_result');
})->name('user.findidresult');

Route::get('/find_password', function () {
    return view('auth.user.find_password');
})->name('user.findpassword');

Route::get('/login', function () {
    return view('auth.user.login');
})->name('login');




// Administrator routes
Route::get('/admin/dashboard', function () {
    return view('admin.administrator_list');
})->name('admin.administratorlist');

Route::get('/admin/admin-management', function () {
    return view('admin.admin_management');
});

Route::get('/admin/administrator_registration', function () {
    return view('admin.administrator_registration');
})->name('admin.administratorregistration');

Route::get('/admin/elim_point_application_details', function () {
    return view('admin.elim_point_application_details');
})->name('admin.elimpointapplicatondetails');

Route::get('/admin/elim_point_exchange_history', function () {
    return view('admin.elim_point_exchange_history');
})->name('admin.elimpointapplicatiionhistory');

Route::get('/admin/elim_point_transfer_history', function () {
    return view('admin.elim_point_transfer_history');
})->name('admin.elimpointtransferhistory');

Route::get('/admin/faq_list', function () {
    return view('admin.faq_list');
})->name('admin.faqlist');

Route::get('/admin/faq_modification', function () {
    return view('admin.faq_modification');
})->name('admin.faqmodification');

Route::get('/admin/faq_register', function () {
    return view('admin.faq_register');
})->name('admin.faqregister');

Route::get('/admin/member_list', function () {
    return view('admin.member_list');
})->name('admin.memberlist');

Route::get('/admin/member_modification', function () {
    return view('admin.member_modification');
})->name('admin.membermodification');

Route::get('/admin/notice_list', function () {
    return view('admin.notice_list');
})->name('admin.noticelist');

Route::get('/admin/notice_modification', function () {
    return view('admin.notice_modification');
})->name('admin.noticemodification');

Route::get('/admin/notice_register', function () {
    return view('admin.notice_register');
})->name('admin.noticeregister');

Route::get('/admin/one_on_one_inquiry_answer', function () {
    return view('admin.one_on_one_inquiry_answer');
})->name('admin.oneononeinquiryregister');

Route::get('/admin/one_on_one_inquiry', function () {
    return view('admin.one_on_one_inquiry');
})->name('admin.oneononeinquiry');

Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('admin.profile');

Route::get('/admin/pv_accumulation_history', function () {
    return view('admin.pv_accumulation_history');
})->name('admin.pvaccumulationhistory');

Route::get('/admin/pv_conversion_applicaton_details', function () {
    return view('admin.pv_conversion_application_details');
})->name('admin.pvconversionapplicationdetails');

Route::get('/admin/pv_usage_history', function () {
    return view('admin.pv_usage_history');
})->name('admin.pvusagehistory');

Route::get('/admin/pv_withdrawal_request_history', function () {
    return view('admin.pv_withdrawal_request_history');
})->name('admin.pvwithdrawalrequesthistory');

Route::get('/admin/t_point_details_by_member', function () {
    return view('admin.t_point_details_by_member');
})->name('admin.tpointdetailsbymember');

Route::get('/admin/trading_order', function () {
    return view('admin.trading_order_history');
})->name('admin.tradingorderhistory');

Route::get('/admin/trading_setting', function () {
    return view('admin.trading_setting');
})->name('admin.tradingsetting');

Route::get('/admin/mlm_user_management', function () {
    return view('admin.mlm_user_management');
})->name('admin.mlmusermanagement');

Route::get('/admin/admin_management_list', function () {
    return view('admin.admin_management_edit');
})->name('admin.adminmanagementedit');

Route::get('/admin/pv_transmission_application_details', function () {
    return view('admin.pv_transmission_application_details');
})->name('admin.pvtransmissionapplicationdetails');

Route::get('/admin/login', function () {
    return view('auth.admin.login');
})->name('admin.login');