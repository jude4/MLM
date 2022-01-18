<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Faq;
use App\Models\Inquiry;
use App\Models\Notice;
use App\Models\User;
use App\Models\PvAccumulationHistory;
use App\Models\PvUsageHistory;
use App\Models\PvWithDrawalRequestHistory;
use App\Models\PvConversionApplication;
use App\Models\PvTransmissionApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //

    public function administratorList()
    {

        $admins = Admin::all();
        $admincount = $admins->count();

        return view('admin.administrator_list', compact('admins', 'admincount'));
    }

    public function administrator_search(Request $request)
    {
        $status = $request->status;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;


        $admins = Admin::
            when($field != '', function ($query) use ($request) {
                $query->where($request->field, 'LIKE', '%' . $request->fieldvalue . '%');
            })
            ->when($status != '', function ($query) use ($request) {
                $query->where('status', '=', $request->status);
            })
            ->when($startdate != '', function ($query) use ($request) {
                $query->where('created_at', '>=', $request->startdate);
            })
            ->when($enddate != '', function ($query) use ($request) {
                $query->where('created_at', '<=', $request->enddate);
            })
            ->get();
        
        $admindata = view('admin.ajax_administrator_list', compact('admins'))->render();
        return response()->json(['status' => '200', 'msg' => $admindata]);
    }

    public function administrator_registration(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'adminid' => 'required|min:5|unique:admins,admin_id',
        ]);
        if ($validator->fails()) {
            $msg =  $validator->errors()->first();
            return response()->json(['status' => '500', 'msg' => $msg]);
        }

        $admin = new Admin;
        $admin->admin_id = $request->adminid;
        $admin->name = $request->adminname;
        $admin->mobile = $request->phoneno;
        $admin->department = $request->department;
        $admin->password = Hash::make($request->password);
        $admin->status = $request->adminstatus;
        $admin->notes = $request->adminnotes;
        $admin->save();

        return response()->json(['status' => '200', 'msg' => 'Added successfully']);
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function updateProfile(Request $request)
    {

        $admin = Auth::guard('admin')->user();

        if ($request->id != $admin->admin_id) {

            $validator = Validator::make($request->all(), [
                'id' => 'required|min:5|unique:admins,admin_id',
            ]);
            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }
        }

        if ($request->password) {
            $validator = Validator::make($request->all(), [
                'password' => 'required|alpha_dash|min:8',
            ]);
            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }
            $admin->password = Hash::make($request->password);
            $admin->save();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:5|',
            'department' => 'required|string|min:5',
        ]);
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $admin->admin_id = $request->id;
        $admin->department = $request->department;
        $admin->name = $request->name;
        $admin->mobile = $request->mobile;
        $admin->save();

        return back()->with('toast_success', 'Profile Updated Successfully!');
    }

    public function adminManagement($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.admin_management', compact('admin'));
    }

    public function editAdmin(Request $request)
    {
        $admin = Admin::findOrFail($request->id);

        if ($request->admin_id != $admin->admin_id) {

            $validator = Validator::make($request->all(), [
                'admin_id' => 'required|min:5|unique:admins,admin_id',
            ]);
            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }
        }

        if ($request->password) {
            $validator = Validator::make($request->all(), [
                'password' => 'required|alpha_dash|min:8',
            ]);
            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }
            $admin->password = Hash::make($request->password);
            $admin->save();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:5|',
            'department' => 'required|string|min:5',
            'notes' => 'string',
        ]);
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        if ($request->status == "active") {
            $admin->status = true;
        }
        if ($request->status == "inactive") {
            $admin->status = false;
        }
        $admin->admin_id = $request->admin_id;
        $admin->department = $request->department;
        $admin->name = $request->name;
        $admin->mobile = $request->mobile;
        $admin->notes = $request->notes;
        $admin->save();

        return back()->with('toast_success', 'Profile Updated Successfully!');
    }

    public function memberList()
    {
        $users = User::all();
        $usercount = $users->count();
        return view('admin.member_list', compact('users', 'usercount'));
    }

  

    public function memberModification($id)
    {
        $user = User::findOrFail($id);
        return view('admin.member_modification', compact('user'));
    }

    public function member_update(Request $request){
        $User = User::findOrFail($request->id);

        $validator = Validator::make($request->all(), [
            'memberid' => 'required',
            'nickname' => 'required',
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            $msg =  $validator->errors()->first();
            return back()->with('toast_error',  $msg);
        }

        $memberidexists = User::where('user_id','=',$request->memberid)->where('id','!=',$request->id)->get();  
        if(!$memberidexists->isEmpty() ){
            $msg = 'Member ID already exists';
            return back()->with('toast_error',  $msg);
        }

        $emailidexists = User::where('email','=',$request->email)->where('id','!=',$request->id)->get();  
        if(!$emailidexists->isEmpty() ){
            $msg = 'Member Email already exists';
            return back()->with('toast_error',  $msg);
        }

        $accesskeyexists = User::where('upbit_access_key','=',$request->upbitaccesskey)->where('id','!=',$request->id)->get(); 
        if(!$accesskeyexists->isEmpty() ){
            $msg = 'Upbit ACCESS KEY already exists';
            return back()->with('toast_error',  $msg);
        }
        
        $secretkeyexists = User::where('upbit_secret_key','=',$request->upbitsecretkey)->where('id','!=',$request->id)->get(); 
        if(!$secretkeyexists->isEmpty() ){
            $msg = 'Upbit SECRET KEY already exists';
            return back()->with('toast_error',  $msg);
        }

        if($request->image){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('image'), $imageName);
        }else{
            $imageName = $request->old_image;
        }
        

        $User->type = $request->membertype;
        $User->status = $request->status;
        $User->user_id = $request->memberid;
        $User->password = Hash::make($request->password);
        $User->nickname = $request->nickname;
        $User->email = $request->email;
        $User->upbit_access_key = $request->upbitaccesskey;
        $User->upbit_secret_key = $request->upbitsecretkey;
        $User->image = $imageName;
        $User->save();

        return back()->with('toast_success', 'Profile Updated Successfully!');

    }

    public function member_search(Request $request){
        $status = $request->status;
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $users = User::
            when($field != '', function ($query) use ($request) {
                $query->where($request->field, 'LIKE', '%' . $request->fieldvalue . '%');
            })
            ->when($status != '', function ($query) use ($request) {
                $query->where('status', '=', $request->status);
            })
            ->when($type != '', function ($query) use ($request) {
                $query->where('type', '=', $request->type);
            })
            ->when($startdate != '', function ($query) use ($request) {
                $query->where('created_at', '>=', $request->startdate);
            })
            ->when($enddate != '', function ($query) use ($request) {
                $query->where('created_at', '<=', $request->enddate);
            })
            ->get();
        
        $userdata = view('admin.ajax_member_list', compact('users'))->render();
        return response()->json(['status' => '200', 'msg' => $userdata]);
    }

    public function createFaq(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required|string|min:5|',
            'answer' => 'required|string|min:20',
            'category' => 'required|string',
            'used' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->category = $request->category;
        $faq->used = $request->used == '1';
        $faq->save();

        return redirect()->route('admin.faqlist')->with('toast_success', 'Faq Added Successfully');
    }

    public function faqList()
    {
        $faqs = Faq::all();
        return view('admin.faq_list', compact('faqs'));
    }

    public function faqModification($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faq_modification', compact('faq'));
    }

    public function modifyFaq(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required|string|min:5|',
            'answer' => 'required|string|min:20',
            'category' => 'required|string',
            'used' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $faq = Faq::findOrFail($request->id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->category = $request->category;
        $faq->used = $request->used == '1';
        $faq->save();

        return redirect()->route('admin.faqlist')->with('toast_success', 'Faq Added Successfully');
    }

    public function oneOnOneInquiry()
    {
        $inquiries = Inquiry::all();
        return view('admin.one_on_one_inquiry', compact('inquiries'));
    }

    public function oneOnOneInquiryAnswer($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        return view('admin.one_on_one_inquiry_answer', compact('inquiry'));
    }

    public function replyOneOnOneInquiry(Request $request)
    {
        $inquiry = Inquiry::findOrFail($request->id);
        $validator = Validator::make($request->all(), [
            'answer' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $inquiry->answer = $request->answer;
        $inquiry->save();
        return redirect()->route('admin.oneononeinquiry')->with('toast_success', 'Inquiry Answered Successfully!');
    }

    public function noticeList()
    {
        $notices = Notice::all();
        return view('admin.notice_list', compact('notices'));
    }

    public function noticeRegister()
    {
        return view('admin.notice_register');
    }

    public function createNotice(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:10',
            'content' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $notice = new Notice();
        $notice->title = $request->title;
        $notice->content = $request->content;
        $notice->views = $request->views;
        $notice->used = $request->used == '1';
        $notice->save();

        return redirect()->route('admin.noticelist')->with('toast_success', 'Notice Created Successfully!');
    }

    public function noticeModification($id)
    {
        $notice = Notice::findOrFail($id);
        return view('admin.notice_modification', compact('notice'));
    }

    public function modifyNotice(Request $request)
    {
        $notice = Notice::findOrFail($request->id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:10',
            'content' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
        $notice->title = $request->title;
        $notice->content = $request->content;
        $notice->views = $request->views;
        $notice->used = $request->used == '1';
        $notice->save();

        return redirect()->route('admin.noticelist')->with('toast_success', 'Notice Created Successfully!');
    }

    public function pvaccumulation_history(){

        $historydatas = PvAccumulationHistory::with(['user'])->get();
        $historycount = $historydatas->count();
              
        return view('admin.pv_accumulation_history',compact('historydatas','historycount'));
    }

    public function pv_accumulation_history_search(Request $request){
       
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        
        $historydatas = PvAccumulationHistory::join('users', 'users.id', '=', 'pv_accumulation_histories.user_id')->
            when($field != '', function ($query) use ($request) {
                $query->where('users.'.$request->field, 'LIKE', '%' .$request->fieldvalue . '%');
            })
            ->when($type != '', function ($query) use ($request) {
                $query->where('pv_accumulation_histories.earning_type', '=', $request->type);
            })
            ->when($startdate != '', function ($query) use ($request) {
                $query->where('pv_accumulation_histories.created_at', '>=', $request->startdate);
            })
            ->when($enddate != '', function ($query) use ($request) {
                $query->where('pv_accumulation_histories.created_at', '<=', $request->enddate);
            })
            ->get();
           
           
        $hdata = view('admin.ajax_pv_accumulation_history', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function pv_usage_history(){
        $historydatas = PvUsageHistory::with(['user'])->get();
        $historycount = $historydatas->count();
        return view('admin.pv_usage_history',compact('historydatas','historycount'));
    }

    public function pv_usage_history_search(Request $request){
        $status = $request->status;
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $historydatas = PvUsageHistory::join('users', 'users.id', '=', 'pv_usage_histories.user_id')->
            when($field != '', function ($query) use ($request) {
                $query->where('users.'.$request->field, 'LIKE', '%' .$request->fieldvalue . '%');
            })
            ->when($status != '', function ($query) use ($request) {
                $query->where('pv_usage_histories.type', '=', $request->status);
            })
            ->when($type != '', function ($query) use ($request) {
                $query->where('pv_usage_histories.pv_type', '=', $request->type);
            })
            ->when($startdate != '', function ($query) use ($request) {
                $query->where('pv_usage_histories.created_at', '>=', $request->startdate);
            })
            ->when($enddate != '', function ($query) use ($request) {
                $query->where('pv_usage_histories.created_at', '<=', $request->enddate);
            })
            ->get();

        $hdata = view('admin.ajax_pv_usage_history', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function pv_withdrawal_request_history(){
        $historydatas = PvWithDrawalRequestHistory::with(['user'])->get();
        $historycount = $historydatas->count();
        return view('admin.pv_withdrawal_request_history',compact('historydatas','historycount'));
    }

    public function pv_withdrawal_request_history_search(Request $request){
        $status = $request->status;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $historydatas = PvWithDrawalRequestHistory::join('users', 'users.id', '=', 'pv_with_drawal_request_histories.user_id')->
        when($field != '', function ($query) use ($request) {
            $query->where('users.'.$request->field, 'LIKE', '%' .$request->fieldvalue . '%');
        })
        ->when($status != '', function ($query) use ($request) {
            $query->where('pv_with_drawal_request_histories.status', '=', $request->status);
        })
        ->when($startdate != '', function ($query) use ($request) {
            $query->where('pv_with_drawal_request_histories.created_at', '>=', $request->startdate);
        })
        ->when($enddate != '', function ($query) use ($request) {
            $query->where('pv_with_drawal_request_histories.created_at', '<=', $request->enddate);
        })
        ->get(['pv_with_drawal_request_histories.*','users.nickname', 'users.user_id']);

        $hdata = view('admin.ajax_pv_withdrawal_request_history', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);

    }

    public function pv_withdrawal_request_history_action(Request $request){
        $id = $request->id;
        $password = $request->password;
        $comment = $request->comment;
        $status = $request->status;

        $admin = Auth::guard('admin')->user();
        $user = User::find($admin->id);
        $user = Admin::where('admin_id', '=', $admin->admin_id)->first();   //get db User data   
        if(!Hash::check($password, $user->password)) {   
             return response()->json(['status'=>500,'msg'=>'password is correct']);
        } 

        $withdrawalhistory = PvWithDrawalRequestHistory::findOrFail($id);
        $withdrawalhistory->status = $status;
        $withdrawalhistory->comment = $comment;
        $withdrawalhistory->save();
        
        $historydatas = PvWithDrawalRequestHistory::with(['user'])->get();
        $hdata = view('admin.ajax_pv_withdrawal_request_history', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function pv_withdrawal_request_detail(Request $request){
       $id = $request->id;

       $historydatas = PvWithDrawalRequestHistory::from('pv_with_drawal_request_histories as pwh')
       ->join('users as u','pwh.user_id','=','u.id')   
       ->select('pwh.*','u.user_id','u.nickname')
       ->where('pwh.id',$id)
       ->get();

       $hdata = view('admin.ajax_pv_withdrawal_request_detail', compact('historydatas'))->render();
       return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function pv_conversion_applicaton_details(){
        $historydatas = PvConversionApplication::with(['user'])->get();
        $historycount = $historydatas->count();
        return view('admin.pv_conversion_application_details',compact('historydatas','historycount'));
    }

    public function particular_pv_conversion_detail(Request $request){
        $id = $request->id;
        $historydatas = PvConversionApplication::from('pv_conversion_applications as pwh')
       ->join('users as u','pwh.user_id','=','u.id')   
       ->select('pwh.*','u.user_id','u.nickname')
       ->where('pwh.id',$id)
       ->get();

       $hdata = view('admin.ajax_particular_pv_conversion_detail', compact('historydatas'))->render();
       return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function particular_pv_conversion_detail_search(Request $request){
        $type = $request->type;
        $status = $request->status;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $historydatas = PvConversionApplication::join('users', 'users.id', '=', 'pv_conversion_applications.user_id')->
        when($field != '', function ($query) use ($request) {
            $query->where('users.'.$request->field, 'LIKE', '%' .$request->fieldvalue . '%');
        })
        ->when($type != '', function ($query) use ($request) {
            $query->where('pv_conversion_applications.type', '=', $request->type);
        })
        ->when($status != '', function ($query) use ($request) {
            $query->where('pv_conversion_applications.status', '=', $request->status);
        })
        ->when($startdate != '', function ($query) use ($request) {
            $query->where('pv_conversion_applications.created_at', '>=', $request->startdate);
        })
        ->when($enddate != '', function ($query) use ($request) {
            $query->where('pv_conversion_applications.created_at', '<=', $request->enddate);
        })
        ->get(['pv_conversion_applications.*','users.nickname', 'users.user_id']);

        $hdata = view('admin.ajax_pv_conversion_application_details', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function pv_conversion_application_action(Request $request){
        $id = $request->id;
        $status = $request->status;

        $withdrawalhistory = PvConversionApplication::findOrFail($id);
        $withdrawalhistory->status = $status;
        $withdrawalhistory->save();
        
        $historydatas = PvConversionApplication::with(['user'])->get();
        $hdata = view('admin.ajax_pv_conversion_application_details', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function pv_transmission_application_details(){
        $historydatas = PvTransmissionApplication::with(['user'])->get();
        $historycount = $historydatas->count();
        return view('admin.pv_transmission_application_details',compact('historydatas','historycount'));
    }
}
