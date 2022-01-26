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
use App\Models\Permissions;
use App\Models\UserPermissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    //

    public function administratorList()
    {
        $admincount = Admin::count();
        return view('admin.administrator_list', compact('admincount'));
    }

    public function datatable_administratorlist(Request $request){
        $totalRecords = Admin::count();
       
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = Admin::select('count(*) as allcount')->where('name', 'like', '%' .$searchValue . '%')->count();

        $records = Admin::skip($start)
              ->take($rowperpage)
              ->get();
              
            $i=0;
        foreach($records as $record){
             $i++;
            if($record->status == '1'){
                $status = 'active';
            }else{
                $status = 'inactive';
            }

            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));
            $correction = '<a href="'.route('admin.adminmanagement',['id' => $record->id]).'" class="btn  btn-correction">Correction</a>';

            $data_arr[] = array(
                "No" => $i,
                "PK" => 30,
                "ID" => $record->admin_id,
                "Name" => $record->name,
                "Dc" => $record->department,
                "State" => $status,
                "Last_login" => $record->last_login,
                "Registration_date" =>  $rdate,
                "Correction" => $correction
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
         );
        return response()->json($response); 
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
        $permissions = Permissions::leftjoin("user_permissions",function($join) use($id){
            $join->on('user_permissions.permission_id', '=', 'permissions.id')->where('user_permissions.admin_id', '=',  $id);
        })
        ->select('permissions.*', 'user_permissions.id as user_permission_id','user_permissions.admin_id as admin_id', 'user_permissions.permission_id as permission_id','user_permissions.is_write as is_write', 'user_permissions.status as user_permission_status')
        ->get()
        ->toArray();

        $allocated_permissions = $unallocated_permissions = [];

        foreach($permissions as $permission){
            if($permission['user_permission_id'] == ''){
                $unallocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            }else{
                $allocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            }
        }
        $datas['unallocated_permissions'] = $unallocated_permissions;
        $datas['allocated_permissions'] = $allocated_permissions;
        $datas['admin_id'] = $id;


        return view('admin.admin_management', compact('admin', 'datas'));
    }

    public function add_administrator_permission(Request $request){
       $adminid = $request->adminid;
       $permissions = $request->permisssion;

       foreach($permissions as $permission){
            $UserPermissions = new UserPermissions;
            $UserPermissions->admin_id = $adminid;
            $UserPermissions->permission_id = $permission;
            $UserPermissions->is_write = 0;
            $UserPermissions->status = 1;
            $UserPermissions->save();
        }

        $permissions = Permissions::leftjoin("user_permissions",function($join) use($adminid){
            $join->on('user_permissions.permission_id', '=', 'permissions.id')->where('user_permissions.admin_id', '=', $adminid);
        })
        ->select('permissions.*', 'user_permissions.id as user_permission_id','user_permissions.admin_id as admin_id', 'user_permissions.permission_id as permission_id','user_permissions.is_write as is_write', 'user_permissions.status as user_permission_status')
        ->get()
        ->toArray();

        $allocated_permissions = $unallocated_permissions = [];

        foreach($permissions as $permission){
            if($permission['user_permission_id'] == ''){
                $unallocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            }else{
                $allocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            }
        }
       
        $unallocatedpermission = view('admin.ajax_unallocated_permissions', compact('unallocated_permissions'))->render();
        $allocatedpermission = view('admin.ajax_allocated_permissions', compact('allocated_permissions'))->render();
        return response()->json(['status' => '200', 'msg' => 'Permission provided successfully.', 'up' => $unallocatedpermission, 'ap' => $allocatedpermission]);

    }

    public function remove_administrator_permission(Request $request){
        $adminid = $request->adminid;
        $permissions = $request->permisssion;

        foreach($permissions as $permission){
            $UserPermissions = new UserPermissions;
            $query = $UserPermissions::where("admin_id",$adminid);
            $query = $UserPermissions::where("permission_id",$permission);
            $query->delete();
        }

        $permissions = Permissions::leftjoin("user_permissions",function($join) use($adminid){
            $join->on('user_permissions.permission_id', '=', 'permissions.id')->where('user_permissions.admin_id', '=', $adminid);
        })
        ->select('permissions.*', 'user_permissions.id as user_permission_id','user_permissions.admin_id as admin_id', 'user_permissions.permission_id as permission_id','user_permissions.is_write as is_write', 'user_permissions.status as user_permission_status')
        ->get()
        ->toArray();

        $allocated_permissions = $unallocated_permissions = [];

        foreach($permissions as $permission){
            if($permission['user_permission_id'] == ''){
                $unallocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            }else{
                $allocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            }
        }
       
        $unallocatedpermission = view('admin.ajax_unallocated_permissions', compact('unallocated_permissions'))->render();
        $allocatedpermission = view('admin.ajax_allocated_permissions', compact('allocated_permissions'))->render();
        return response()->json(['status' => '200', 'msg' => 'Permission removed successfully.', 'up' => $unallocatedpermission, 'ap' => $allocatedpermission]); 
    }

    public function change_administrator_permission(Request $request){
        $adminid = $request->adminid;
        $permisssion = $request->permisssion;
        $permissionid = $request->permisssionid;

        $UserPermissions = new UserPermissions;
        $query = $UserPermissions::where('admin_id', $adminid);
        $query = $UserPermissions::where('permission_id', $permissionid);
        $query->update([
           'is_write' => $permisssion
        ]);

        $permissions = Permissions::leftjoin("user_permissions",function($join) use($adminid){
            $join->on('user_permissions.permission_id', '=', 'permissions.id')->where('user_permissions.admin_id', '=', $adminid);
        })
        ->select('permissions.*', 'user_permissions.id as user_permission_id','user_permissions.admin_id as admin_id', 'user_permissions.permission_id as permission_id','user_permissions.is_write as is_write', 'user_permissions.status as user_permission_status')
        ->get()
        ->toArray();

        $allocated_permissions = $unallocated_permissions = [];

        foreach($permissions as $permission){
            if($permission['user_permission_id'] == ''){
                $unallocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            }else{
                $allocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            }
        }
       
        $unallocatedpermission = view('admin.ajax_unallocated_permissions', compact('unallocated_permissions'))->render();
        $allocatedpermission = view('admin.ajax_allocated_permissions', compact('allocated_permissions'))->render();
        return response()->json(['status' => '200', 'msg' => 'Permission updated successfully.', 'up' => $unallocatedpermission, 'ap' => $allocatedpermission]); 
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
        $usercount = User::count();
        return view('admin.member_list', compact('usercount'));
    }


    public function datatable_member_list(Request $request){
        $totalRecords = User::count();
       
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = User::select('count(*) as allcount')->where('nickname', 'like', '%' .$searchValue . '%')->count();

        $records = User::skip($start)
              ->take($rowperpage)
              ->get();
              
            $i=0;
           
        foreach($records as $record){
             $i++;
             $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

             if($record->type == 0){
                $utype = "Normal";
             }else{
                $utype = "MLM";
             }

             if($record->available_pv != 0){
                 $ap = $record->available_pv;
             }else{
                 $ap = '-';
             }

             if($record->earned_pv != 0){
                $ep = $record->earned_pv;
             }else{
                 $ep = '-';
             }

             if($record->status == 1){
                 $state = 'active';
             }else{
                $state = 'inactive';
             }

             $correction = '<a href="'.route('admin.membermodification',['id' => $record->id]).'" class="btn  btn-correction">Correction</a>';
            
            $data_arr[] = array(
                "No" => $i,
                "PK" => 30,
                "Utype" => $utype,
                "UserID" => $record->user_id,
                "Nickname" => $record->nickname,
                "Email" => $record->email,
                "Elim_Points" => $record->elim_points,
                "T_points" => $record->t_points,
                "Available_PV" => $ap,
                "Earned_PV" => $ep,
                "State" => $state,
                "Registration_Date" => $rdate,
                "Correction" => $correction,
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
         );
        return response()->json($response); 
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
        $faqcount = $faqs->count();
        return view('admin.faq_list', compact('faqs','faqcount'));
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

    function faq_search(Request $request){
        $status = $request->status;
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $faqs = Faq::select()->
        when($field != '', function ($query) use ($request) {
            $query->where($request->field, 'LIKE', '%' .$request->fieldvalue . '%');
        })
        ->when($status != '', function ($query) use ($request) {
            $query->where('category', '=', $request->status);
        })
        ->when($type != '', function ($query) use ($request) {
            $query->where('used', '=', $request->type);
        })
        ->when($startdate != '', function ($query) use ($request) {
            $query->where('created_at', '>=', $request->startdate);
        })
        ->when($enddate != '', function ($query) use ($request) {
            $query->where('created_at', '<=', $request->enddate);
        })
        ->get();

        $faqdata = view('admin.ajax_faq_list', compact('faqs'))->render();
        return response()->json(['status' => '200', 'msg' => $faqdata]);
    }

    public function oneOnOneInquiry()
    {
        
        $inquiries = Inquiry::all();
        $inquiriescount = $inquiries->count();
        return view('admin.one_on_one_inquiry', compact('inquiries','inquiriescount'));
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

    public function one_on_one_inquiry_search(Request $request){
        $status = $request->status;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        

        $inquiries = Inquiry::join('users', 'users.id', '=', 'inquiries.user_id')->
        when($field != '', function ($query) use ($request) {
            if($request->field == 'inquiry'){
                $query->where($request->field, 'LIKE', '%' .$request->fieldvalue . '%');
            }else{
                $query->where('users.'.$request->field, 'LIKE', '%' .$request->fieldvalue . '%');
            } 
        })
        ->when( $status != '', function ($query) use ($request) {
            if($request->status == 'AC'){
                $query->where('inquiries.answer', '!=', '');
            }else{
                $query->where('inquiries.answer', '=', '');
            }
        })
        ->when($startdate != '', function ($query) use ($request) {
            $query->where('inquiries.created_at', '>=', $request->startdate);
        })
        ->when($enddate != '', function ($query) use ($request) {
            $query->where('inquiries.created_at', '<=', $request->enddate);
        }) 
        ->get('inquiries.*', 'users.user_id', 'users.nickname', 'users.created_at as cdate');

        $inquiry = view('admin.ajax_one_on_one_inquiry', compact('inquiries'))->render();
        return response()->json(['status' => '200', 'msg' => $inquiry]);
    }

    public function noticeList()
    {
        $notices = Notice::all();
        $noticescount = $notices->count();
        return view('admin.notice_list', compact('notices','noticescount'));
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

    public function notice_search(Request $request){
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $notices = Notice::select()->
        when($field != '', function ($query) use ($request) {
            $query->where($request->field, 'LIKE', '%' .$request->fieldvalue . '%');
        })
        ->when($type != '', function ($query) use ($request) {
            $query->where('used', '=', $request->type);
        })
        ->when($startdate != '', function ($query) use ($request) {
            $query->where('created_at', '>=', $request->startdate);
        })
        ->when($enddate != '', function ($query) use ($request) {
            $query->where('created_at', '<=', $request->enddate);
        })
        ->get();

        $notices = view('admin.ajax_notice_list', compact('notices'))->render();
        return response()->json(['status' => '200', 'msg' => $notices]);

    }

    public function pvaccumulation_history(){
        $historycount =PvAccumulationHistory::count();
        return view('admin.pv_accumulation_history',compact('historycount'));
    }

    public function datatable_pv_accumulation_history_list(Request $request){
        $totalRecords = PvAccumulationHistory::count();
       
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = PvAccumulationHistory::select('count(*) as allcount')->where('earning_type', 'like', '%' .$searchValue . '%')->count();

        $records = PvAccumulationHistory::with(['user'])->skip($start)
              ->take($rowperpage)
              ->get();
      
              
            $i=0;
        foreach($records as $record){
             $i++;

             $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));
            
            $data_arr[] = array(
                "No" => $i,
                "PK" => 30,
                "ID" => $record->user->user_id,
                "Nickname" => $record->user->nickname,
                "Earning_Type" => $record->earning_type,
                "Available_Earned_Bonus" => $record->available_earned_bonus,
                "Accumulated_Earned_Bonus" => $record->accumulated_earned_bonus,
                "Accumulation_Date" =>  $rdate
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
         );
        return response()->json($response); 
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
        $historycount = PvUsageHistory::count();
        return view('admin.pv_usage_history',compact('historycount'));
    }

    public function datatable_pv_usage_history_list(Request $request){
        $totalRecords = PvUsageHistory::count();
       
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = PvUsageHistory::select('count(*) as allcount')->where('pv_type', 'like', '%' .$searchValue . '%')->count();

        $records = PvUsageHistory::with(['user'])->skip($start)
              ->take($rowperpage)
              ->get();
      
              
            $i=0;
        foreach($records as $record){
             $i++;

             if($record->type == '1'){
                $tou = 'withdraw';
             }else if($record->type == '2'){
                $tou = 'send';
             }else if($record->type == '3'){
                $tou = 'transform';
             }else{
                $tou = 'repurchase';
             }

             $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));
            
            $data_arr[] = array(
                "No" => $i,
                "PK" => 30,
                "PV_Type" => $record->pv_type,
                "ID" => $record->user->user_id,
                "Nickname" => $record->user->nickname,
                "Type_of_use" => $tou,
                "Price" => $record->price,
                "Date_of_use" => $rdate,
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
         );
        return response()->json($response);
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

    public function datatable_pv_withdrawal_history_list(Request $request){
        $totalRecords = PvWithDrawalRequestHistory::count();
       
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = PvWithDrawalRequestHistory::select('count(*) as allcount')->where('bank_name', 'like', '%' .$searchValue . '%')->count();

        $records = PvWithDrawalRequestHistory::with(['user'])->skip($start)
              ->take($rowperpage)
              ->get();
      
              
            $i=0;
        foreach($records as $record){
             $i++;

             $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

             if($record->status == 0){
                $status = '<span class="inc-text-change1">atmosphere</span>';
             }else if($record->status == 1){
                $status = '<span class="incas-text-changes">Approval</span>';
             }else{
                $status = '<span class="incas-text-changes text-danger">Cancellation</span>';
             }

             if($record->status == 0){
                $Approval = '<a href="#" class="btn  btn-correction" onclick="approvalmodalopen('.$record->id.')">
                Approval</a>
                <a href="#" class="btn  btn-ends" onclick="cancelmodalopen('.$record->id.')">
                cancellation</a>';
             }else{
                $Approval = '-';
             }

             $appdatetime = '<a href="#" class="btn  btn-correction" onclick="detailmodalopen('.$record->id.')"> Look</a>';
            
            $data_arr[] = array(
                "No" => $i,
                "PK" => 30,
                "ID" => $record->user->user_id,
                "Nickname" => $record->user->nickname,
                "Amount" => $record->amount,
                "Status" => $status,
                "Approval" => $Approval,
                "Confirmation" => $rdate,
                "Application_date_and_time" => $appdatetime
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
         );
        return response()->json($response); 
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

        $hdata = view('admin.ajax_pv_withdrawal_request_history_search', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);

    }

    public function pv_withdrawal_request_history_action(Request $request){
        $id = $request->id;
        $password = $request->password;
        $status = $request->status;

        $admin = Auth::guard('admin')->user();
        $user = User::find($admin->id);
        $user = Admin::where('admin_id', '=', $admin->admin_id)->first();   //get db User data   
        if(!Hash::check($password, $user->password)) {   
             return response()->json(['status'=>500,'msg'=>'password is incorrect']);
        } 

        $withdrawalhistory = PvWithDrawalRequestHistory::findOrFail($id);
        $withdrawalhistory->status = $status;
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
        $historycount = PvConversionApplication::count();
        return view('admin.pv_conversion_application_details',compact('historycount'));
    }

    public function datatable_pv_conversion_application_detail(Request $request){
        $totalRecords = PvConversionApplication::count();
       
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = PvConversionApplication::select('count(*) as allcount')->where('type', 'like', '%' .$searchValue . '%')->count();

        $records = PvConversionApplication::with(['user'])->skip($start)
              ->take($rowperpage)
              ->get();
      
              
            $i=0;
        foreach($records as $record){
             $i++;
             $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

             if($record->type == 0){
                 $type = 'Available PV';
             }else{
                 $type = 'resale';
             }

             if($record->status == 0){
                $status = '<span class="inc-text-change1">atmosphere</span>';
             }else if($record->status == 1){
                $status = '<span class="incas-text-changes">Approval</span>';
             }else{
                $status = '<span class="incas-text-changes text-danger">Cancellation</span>';
             }

             if($record->status == 0){
                $Approval = '<a href="#" class="btn  btn-correction" onclick="approvalmodalopen('.$record->id.')">
                Approval </a>
                <a href="#" class="btn  btn-ends" onclick="cancelmodalopen('.$record->id.')">
                cancellation</a>';
             }else{
                $Approval = '-';
             }

             $detailmodal = '<a href="#" class="btn  btn-correction" onclick="detailmodalopen('.$record->id.')">Look</a>';

             
            $data_arr[] = array(
                "No" => $i,
                "PK" => 30,
                "ID" => $record->user->user_id,
                "Nickname" => $record->user->nickname,
                "Type" => $type,
                "Conversion_Quantity" => $record->amount,
                "State" => $status,
                "Approval_Confirmation" => $Approval,
                "Application_Date_And_Time" => $rdate,
                "Detail" => $detailmodal
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
         );
        return response()->json($response);
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

        $hdata = view('admin.ajax_pv_conversion_application_details_search', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function pv_conversion_application_action(Request $request){

        $id = $request->id;
        $password = $request->password;
        $status = $request->status;

        $admin = Auth::guard('admin')->user();
        $user = User::find($admin->id);
        $user = Admin::where('admin_id', '=', $admin->admin_id)->first();   //get db User data   
        if(!Hash::check($password, $user->password)) {   
             return response()->json(['status'=>500,'msg'=>'password is incorrect']);
        } 

        $PvConversionApplication = PvConversionApplication::findOrFail($id);
        $PvConversionApplication->status = $status;
        $PvConversionApplication->save();
        
        $historydatas = PvConversionApplication::with(['user'])->get();
        $hdata = view('admin.ajax_pv_conversion_application_details', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function pv_transmission_application_details(){
        $historydatas = PvTransmissionApplication::with(['user'])->get();
        $historycount = $historydatas->count();
        return view('admin.pv_transmission_application_details',compact('historydatas','historycount'));
    }

    public function datatable_pv_transmission_application_detail(Request $request){
        $totalRecords = PvTransmissionApplication::count();
       
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = PvTransmissionApplication::select('count(*) as allcount')->where('amount', 'like', '%' .$searchValue . '%')->count();

        $records = PvTransmissionApplication::with(['user'])->skip($start)
              ->take($rowperpage)
              ->get();
      
              
            $i=0;
        foreach($records as $record){
             $i++;
             $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));
             if($record->status == 0){
                $status = '<span class="inc-text-change1">atmosphere</span>';
             }else if($record->status == 1){
                $status = '<span class="incas-text-changes">Approval</span>';
             }else{
                $status = '<span class="incas-text-changes text-danger">Cancellation</span>';
             }

             if($record->status == 0){
                $Approval = '<a href="#" class="btn  btn-correction" onclick="approvalmodalopen('.$record->id.')">
                Approval </a>
                <a href="#" class="btn  btn-ends" onclick="cancelmodalopen('.$record->id.')">
                cancellation
                </a>
                ';
             }else{
                $Approval = '-';
             }

             $detail = '<a href="#" class="btn  btn-correction" onclick="detailmodalopen('.$record->id.')">
             Look</a>';

             
            $data_arr[] = array(
                "No" => $i,
                "PK" => 30,
                "ID" => $record->user->user_id,
                "Nickname" => $record->user->nickname,
                "Amount" => $record->amount,
                "State" => $status,
                "Approval_Confirmation" => $Approval,
                "Application_Date_And_Time" => $rdate,
                "Detail" => $detail
                
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
         );
        return response()->json($response);
    }

    public function particul_transmission_application_detail(Request $request){
        $id = $request->id;
        $historydatas = PvTransmissionApplication::from('pv_transmission_applications as pwh')
       ->join('users as u','pwh.user_id','=','u.id')   
       ->select('pwh.*','u.user_id','u.nickname')
       ->where('pwh.id',$id)
       ->get();

       $hdata = view('admin.ajax_particular_transmission_application_detail', compact('historydatas'))->render();
       return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function transmission_application_detail_search(Request $request){
        $status = $request->status;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $historydatas = PvTransmissionApplication::join('users', 'users.id', '=', 'pv_transmission_applications.user_id')->
        when($field != '', function ($query) use ($request) {
            $query->where('users.'.$request->field, 'LIKE', '%' .$request->fieldvalue . '%');
        })
        ->when($status != '', function ($query) use ($request) {
            $query->where('pv_transmission_applications.status', '=', $request->status);
        })
        ->when($startdate != '', function ($query) use ($request) {
            $query->where('pv_transmission_applications.created_at', '>=', $request->startdate);
        })
        ->when($enddate != '', function ($query) use ($request) {
            $query->where('pv_transmission_applications.created_at', '<=', $request->enddate);
        })
        ->get(['pv_transmission_applications.*','users.nickname', 'users.user_id']);

        $hdata = view('admin.ajax_pv_transmission_application_details_search', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function pv_transmission_application_action(Request $request){
        $id = $request->id;
        $password = $request->password;
        $status = $request->status;

        $admin = Auth::guard('admin')->user();
        $user = User::find($admin->id);
        $user = Admin::where('admin_id', '=', $admin->admin_id)->first();   //get db User data   
        if(!Hash::check($password, $user->password)) {   
             return response()->json(['status'=>500,'msg'=>'password is incorrect']);
        } 

        $PvTransmissionApplication = PvTransmissionApplication::findOrFail($id);
        $PvTransmissionApplication->status = $status;
        $PvTransmissionApplication->save();
        
        $historydatas = PvTransmissionApplication::with(['user'])->get();
        $hdata = view('admin.ajax_pv_transmission_application_details', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }
}
