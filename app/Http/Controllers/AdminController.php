<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Faq;
use App\Models\Inquiry;
use App\Models\Notice;
use App\Models\TpointDetailsByMember;
use App\Models\Permissions;
use App\Models\UserPermissions;
use App\Models\TradingSetting;
use App\Models\User;
use App\Models\PvAccumulationHistory;
use App\Models\PvUsageHistory;
use App\Models\PvWithDrawalRequestHistory;
use App\Models\PvConversionApplication;
use App\Models\PvTransmissionApplication;
use App\Models\ElimPointApplication;
use App\Models\ElimPointExchangeHistory;
use App\Models\ElimPointTransferHistory;
use App\Models\PursueTrade;
use App\Models\SectionTrade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //

    public function administratorList()
    {
        $permission = get_permission('Admin List');
        $admincount = Admin::count();
        return view('admin.administrator_list', compact('admincount','permission'));
    }

    public function datatable_administratorlist(Request $request)
    {
        $permission = get_permission('Admin List');
        $totalRecords = Admin::count();
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = Admin::select('count(*) as allcount')->where('name', 'like', '%' . $searchValue . '%')->count();

        $records = Admin::skip($start)
            ->take($rowperpage)
            ->get();
        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;
            if ($record->status == '1') {
                $status = 'active';
            } else {
                $status = 'inactive';
            }

            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

            $correction = '';

            if($permission == 1){
                $correction = '<a href="' . route('admin.adminmanagement', ['id' => $record->id]) . '" class="btn  btn-correction">Correction</a>';
            }
            

            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
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


        $admins = Admin::when($field != '', function ($query) use ($request) {
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
        $permissions = Permissions::leftjoin("user_permissions", function ($join) use ($id) {
            $join->on('user_permissions.permission_id', '=', 'permissions.id')->where('user_permissions.admin_id', '=',  $id);
        })
            ->select('permissions.*', 'user_permissions.id as user_permission_id', 'user_permissions.admin_id as admin_id', 'user_permissions.permission_id as permission_id', 'user_permissions.is_write as is_write', 'user_permissions.status as user_permission_status')
            ->get()
            ->toArray();

        $allocated_permissions = $unallocated_permissions = [];

        foreach ($permissions as $permission) {
            if ($permission['user_permission_id'] == '') {
                $unallocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            } else {
                $allocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            }
        }
        $datas['unallocated_permissions'] = $unallocated_permissions;
        $datas['allocated_permissions'] = $allocated_permissions;
        $datas['admin_id'] = $id;


        return view('admin.admin_management', compact('admin', 'datas'));
    }

    public function add_administrator_permission(Request $request)
    {
        $adminid = $request->adminid;
        $permissions = $request->permisssion;

        foreach ($permissions as $permission) {
            $UserPermissions = new UserPermissions;
            $UserPermissions->admin_id = $adminid;
            $UserPermissions->permission_id = $permission;
            $UserPermissions->is_write = 0;
            $UserPermissions->status = 1;
            $UserPermissions->save();
        }

        $permissions = Permissions::leftjoin("user_permissions", function ($join) use ($adminid) {
            $join->on('user_permissions.permission_id', '=', 'permissions.id')->where('user_permissions.admin_id', '=', $adminid);
        })
            ->select('permissions.*', 'user_permissions.id as user_permission_id', 'user_permissions.admin_id as admin_id', 'user_permissions.permission_id as permission_id', 'user_permissions.is_write as is_write', 'user_permissions.status as user_permission_status')
            ->get()
            ->toArray();

        $allocated_permissions = $unallocated_permissions = [];

        foreach ($permissions as $permission) {
            if ($permission['user_permission_id'] == '') {
                $unallocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            } else {
                $allocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            }
        }

        $unallocatedpermission = view('admin.ajax_unallocated_permissions', compact('unallocated_permissions'))->render();
        $allocatedpermission = view('admin.ajax_allocated_permissions', compact('allocated_permissions'))->render();
        return response()->json(['status' => '200', 'msg' => 'Permission provided successfully.', 'up' => $unallocatedpermission, 'ap' => $allocatedpermission]);
    }

    public function remove_administrator_permission(Request $request)
    {
        $adminid = $request->adminid;
        $permissions = $request->permisssion;

        foreach ($permissions as $permission) {
            $UserPermissions = new UserPermissions;
            $query = $UserPermissions::where("admin_id", $adminid);
            $query = $UserPermissions::where("permission_id", $permission);
            $query->delete();
        }

        $permissions = Permissions::leftjoin("user_permissions", function ($join) use ($adminid) {
            $join->on('user_permissions.permission_id', '=', 'permissions.id')->where('user_permissions.admin_id', '=', $adminid);
        })
            ->select('permissions.*', 'user_permissions.id as user_permission_id', 'user_permissions.admin_id as admin_id', 'user_permissions.permission_id as permission_id', 'user_permissions.is_write as is_write', 'user_permissions.status as user_permission_status')
            ->get()
            ->toArray();

        $allocated_permissions = $unallocated_permissions = [];

        foreach ($permissions as $permission) {
            if ($permission['user_permission_id'] == '') {
                $unallocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            } else {
                $allocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            }
        }

        $unallocatedpermission = view('admin.ajax_unallocated_permissions', compact('unallocated_permissions'))->render();
        $allocatedpermission = view('admin.ajax_allocated_permissions', compact('allocated_permissions'))->render();
        return response()->json(['status' => '200', 'msg' => 'Permission removed successfully.', 'up' => $unallocatedpermission, 'ap' => $allocatedpermission]);
    }

    public function change_administrator_permission(Request $request)
    {
        $adminid = $request->adminid;
        $permisssion = $request->permisssion;
        $permissionid = $request->permisssionid;

        $UserPermissions = new UserPermissions;
        $query = $UserPermissions::where('admin_id', $adminid);
        $query = $UserPermissions::where('permission_id', $permissionid);
        $query->update([
            'is_write' => $permisssion
        ]);

        $permissions = Permissions::leftjoin("user_permissions", function ($join) use ($adminid) {
            $join->on('user_permissions.permission_id', '=', 'permissions.id')->where('user_permissions.admin_id', '=', $adminid);
        })
            ->select('permissions.*', 'user_permissions.id as user_permission_id', 'user_permissions.admin_id as admin_id', 'user_permissions.permission_id as permission_id', 'user_permissions.is_write as is_write', 'user_permissions.status as user_permission_status')
            ->get()
            ->toArray();

        $allocated_permissions = $unallocated_permissions = [];

        foreach ($permissions as $permission) {
            if ($permission['user_permission_id'] == '') {
                $unallocated_permissions[$permission['guard_name']][$permission['name']] = $permission;
            } else {
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

    public function datatable_member_list(Request $request)
    {
        $permission = get_permission('Admin List');
        $totalRecords = User::count();
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = User::select('count(*) as allcount')->where('nickname', 'like', '%' . $searchValue . '%')->count();

        $records = User::skip($start)
            ->take($rowperpage)
            ->get();

        $i = 0;
        $data_arr = array();


        foreach ($records as $record) {
            $i++;
            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

            if ($record->available_pv != 0) {
                $ap = $record->available_pv;
            } else {
                $ap = '-';
            }

            if ($record->earned_pv != 0) {
                $ep = $record->earned_pv;
            } else {
                $ep = '-';
            }

            if ($record->status == 1) {
                $state = 'active';
            } else {
                $state = 'inactive';
            }

            $correction = '';

            if($permission == 1){
                $correction = '<a href="' . route('admin.membermodification', ['id' => $record->id]) . '" class="btn  btn-correction">Correction</a>';
            }
            

            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
                "Utype" => $record->type,
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

    public function member_search(Request $request)
    {
        $status = $request->status;
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $users = User::when($field != '', function ($query) use ($request) {
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

    public function memberModification($id)
    {   
        $user = User::findOrFail($id);
        return view('admin.member_modification', compact('user'));
    }

    public function member_update(Request $request)
    {
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

        $memberidexists = User::where('user_id', '=', $request->memberid)->where('id', '!=', $request->id)->get();
        if (!$memberidexists->isEmpty()) {
            $msg = 'Member ID already exists';
            return back()->with('toast_error',  $msg);
        }

        $emailidexists = User::where('email', '=', $request->email)->where('id', '!=', $request->id)->get();
        if (!$emailidexists->isEmpty()) {
            $msg = 'Member Email already exists';
            return back()->with('toast_error',  $msg);
        }

        $accesskeyexists = User::where('upbit_access_key', '=', $request->upbitaccesskey)->where('id', '!=', $request->id)->get();
        if (!$accesskeyexists->isEmpty()) {
            $msg = 'Upbit ACCESS KEY already exists';
            return back()->with('toast_error',  $msg);
        }

        $secretkeyexists = User::where('upbit_secret_key', '=', $request->upbitsecretkey)->where('id', '!=', $request->id)->get();
        if (!$secretkeyexists->isEmpty()) {
            $msg = 'Upbit SECRET KEY already exists';
            return back()->with('toast_error',  $msg);
        }

        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $imageName);
        } else {
            $imageName = $request->old_image;
        }

        $mtype =  $request->membertype;
        $User->type =  $mtype;
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

    public function pvaccumulation_history()
    {
        $historycount = PvAccumulationHistory::count();
        return view('admin.pv_accumulation_history', compact('historycount'));
    }

    public function datatable_pv_accumulation_history_list(Request $request)
    {
        $totalRecords = PvAccumulationHistory::count();

        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = PvAccumulationHistory::select('count(*) as allcount')->where('earning_type', 'like', '%' . $searchValue . '%')->count();

        $records = PvAccumulationHistory::with(['user'])->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;

            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
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

    public function pv_accumulation_history_search(Request $request)
    {

        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;


        $historydatas = PvAccumulationHistory::join('users', 'users.id', '=', 'pv_accumulation_histories.user_id')->when($field != '', function ($query) use ($request) {
                $query->where('users.' . $request->field, 'LIKE', '%' . $request->fieldvalue . '%');
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

    public function datatable_pv_usage_history_list(Request $request)
    {
        $totalRecords = PvUsageHistory::count();

        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = PvUsageHistory::select('count(*) as allcount')->where('pv_type', 'like', '%' . $searchValue . '%')->count();

        $records = PvUsageHistory::with(['user'])->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;

            if ($record->type == '1') {
                $tou = 'withdraw';
            } else if ($record->type == '2') {
                $tou = 'send';
            } else if ($record->type == '3') {
                $tou = 'transform';
            } else {
                $tou = 'repurchase';
            }

            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
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

    public function pv_usage_history_search(Request $request)
    {
        $status = $request->status;
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $historydatas = PvUsageHistory::join('users', 'users.id', '=', 'pv_usage_histories.user_id')->when($field != '', function ($query) use ($request) {
                $query->where('users.' . $request->field, 'LIKE', '%' . $request->fieldvalue . '%');
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

    public function datatable_pv_withdrawal_history_list(Request $request)
    {
        $permission = get_permission('PV withdrawal request history');
        $totalRecords = PvWithDrawalRequestHistory::count();
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = PvWithDrawalRequestHistory::select('count(*) as allcount')->where('bank_name', 'like', '%' . $searchValue . '%')->count();

        $records = PvWithDrawalRequestHistory::with(['user'])->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;

            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

            
            if ($record->status == 'pending') {
                $status = '<span class="inc-text-change1">atmosphere</span>';
            } else if ($record->status == 'approved') {
                $status = '<span class="incas-text-changes">Approval</span>';
            } else {
                $status = '<span class="incas-text-changes text-danger">Cancellation</span>';
            }

            if ($record->status == 'pending') {
                if($permission == 1){
                    $Approval = '<a href="#" onclick="approvalmodalopen(' . $record->id . ')" class="btn  btn-correction">
                    Approval </a>
                    <a href="#"  onclick="cancelmodalopen(' . $record->id . ')" class="btn  btn-ends">
                        cancellation
                    </a>';
                }else{
                    $Approval = '';
                }
               
            } else {
                $Approval = '-';
            }

            $appdatetime = '<a href="#" class="btn  btn-correction" onclick="detailmodalopen(' . $record->id . ')"> Look</a>';

            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
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

    public function pv_withdrawal_request_history_search(Request $request)
    {
        $status = $request->status;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $historydatas = PvWithDrawalRequestHistory::join('users', 'users.id', '=', 'pv_with_drawal_request_histories.user_id')->when($field != '', function ($query) use ($request) {
                $query->where('users.' . $request->field, 'LIKE', '%' . $request->fieldvalue . '%');
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
            ->get(['pv_with_drawal_request_histories.*', 'users.nickname', 'users.user_id']);

        $hdata = view('admin.ajax_pv_withdrawal_request_history_search', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function pv_withdrawal_request_history_action(Request $request)
    {
        $id = $request->id;
        $password = $request->password;
        $status = $request->status;

        $admin = Auth::guard('admin')->user();
        $user = User::find($admin->id);
        $user = Admin::where('admin_id', '=', $admin->admin_id)->first();   //get db User data   
        if (!Hash::check($password, $user->password)) {
            return response()->json(['status' => 500, 'msg' => 'password is incorrect']);
        }

        $withdrawalhistory = PvWithDrawalRequestHistory::findOrFail($id);
        $withdrawalhistory->status = $status;
        $withdrawalhistory->save();

        $historydatas = PvWithDrawalRequestHistory::with(['user'])->get();
        $hdata = view('admin.ajax_pv_withdrawal_request_history', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function pv_withdrawal_request_detail(Request $request)
    {
        $id = $request->id;

        $historydatas = PvWithDrawalRequestHistory::from('pv_with_drawal_request_histories as pwh')
            ->join('users as u', 'pwh.user_id', '=', 'u.id')
            ->select('pwh.*', 'u.user_id', 'u.nickname')
            ->where('pwh.id', $id)
            ->get();

        $hdata = view('admin.ajax_pv_withdrawal_request_detail', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function datatable_pv_conversion_application_detail(Request $request)
    {
        $permission = get_permission('PV conversion application details');
        $totalRecords = PvConversionApplication::count();
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = PvConversionApplication::select('count(*) as allcount')->where('type', 'like', '%' . $searchValue . '%')->count();

        $records = PvConversionApplication::with(['user'])->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;
            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

            if ($record->type == 0) {
                $type = 'Available PV';
            } else {
                $type = 'resale';
            }

            

            if ($record->status == 'pending') {
                $status = '<span class="inc-text-change1">atmosphere</span>';
            } else if ($record->status == 'approved') {
                $status = '<span class="incas-text-changes">Approval</span>';
            } else {
                $status = '<span class="incas-text-changes text-danger">Cancellation</span>';
            }

            if ($record->status == 'pending') {
                if($permission ==  1){
                    $Approval = '<a href="#" class="btn  btn-correction" onclick="approvalmodalopen(' . $record->id . ')">
                    Approval </a>
                    <a href="#" class="btn  btn-ends" onclick="cancelmodalopen(' . $record->id . ')">
                    cancellation</a>';
                }else{
                    $Approval = '';
                }
               
            } else {
                $Approval = '-';
            }

            $detailmodal = '<a href="#" class="btn  btn-correction" onclick="detailmodalopen(' . $record->id . ')">Look</a>';


            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
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

    public function particular_pv_conversion_detail(Request $request)
    {
        $id = $request->id;
        $historydatas = PvConversionApplication::from('pv_conversion_applications as pwh')
            ->join('users as u', 'pwh.user_id', '=', 'u.id')
            ->select('pwh.*', 'u.user_id', 'u.nickname')
            ->where('pwh.id', $id)
            ->get();

        $hdata = view('admin.ajax_particular_pv_conversion_detail', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function pv_conversion_application_action(Request $request)
    {

        $id = $request->id;
        $password = $request->password;
        $status = $request->status;

        $admin = Auth::guard('admin')->user();
        $user = User::find($admin->id);
        $user = Admin::where('admin_id', '=', $admin->admin_id)->first();   //get db User data   
        if (!Hash::check($password, $user->password)) {
            return response()->json(['status' => 500, 'msg' => 'password is incorrect']);
        }

        $PvConversionApplication = PvConversionApplication::findOrFail($id);
        $PvConversionApplication->status = $status;
        $PvConversionApplication->save();

        $historydatas = PvConversionApplication::with(['user'])->get();
        $hdata = view('admin.ajax_pv_conversion_application_details', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function particular_pv_conversion_detail_search(Request $request)
    {
        $type = $request->type;
        $status = $request->status;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $historydatas = PvConversionApplication::join('users', 'users.id', '=', 'pv_conversion_applications.user_id')->when($field != '', function ($query) use ($request) {
                $query->where('users.' . $request->field, 'LIKE', '%' . $request->fieldvalue . '%');
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
            ->get(['pv_conversion_applications.*', 'users.nickname', 'users.user_id']);

        $hdata = view('admin.ajax_pv_conversion_application_details_search', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function datatable_pv_transmission_application_detail(Request $request)
    {
        $permission = get_permission('Admin List');
        $totalRecords = PvTransmissionApplication::count();
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = PvTransmissionApplication::select('count(*) as allcount')->where('amount', 'like', '%' . $searchValue . '%')->count();

        $records = PvTransmissionApplication::with(['user'])->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;
            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

            if ($record->status == 0) {
                $status = '<span class="inc-text-change1">atmosphere</span>';
            } else if ($record->status == 1) {
                $status = '<span class="incas-text-changes">Approval</span>';
            } else {
                $status = '<span class="incas-text-changes text-danger">Cancellation</span>';
            }

            if ($record->status == 0) {

                if($permission == 1){
                    $Approval = '<a href="#" class="btn  btn-correction" onclick="approvalmodalopen(' . $record->id . ')">
                    Approval </a>
                    <a href="#" class="btn  btn-ends" onclick="cancelmodalopen(' . $record->id . ')">
                    cancellation
                    </a>
                    ';
                }else{
                    $Approval = '';
                }
                
            } else {
                $Approval = '-';
            }

            $detail = '<a href="#" class="btn  btn-correction" onclick="detailmodalopen(' . $record->id . ')">
             Look</a>';


            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
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

    public function pv_transmission_application_action(Request $request)
    {
        $id = $request->id;
        $password = $request->password;
        $status = $request->status;

        $admin = Auth::guard('admin')->user();
        $user = User::find($admin->id);
        $user = Admin::where('admin_id', '=', $admin->admin_id)->first();   //get db User data   
        if (!Hash::check($password, $user->password)) {
            return response()->json(['status' => 500, 'msg' => 'password is incorrect']);
        }

        $PvTransmissionApplication = PvTransmissionApplication::findOrFail($id);
        $PvTransmissionApplication->status = $status;
        $PvTransmissionApplication->save();

        $historydatas = PvTransmissionApplication::with(['user'])->get();
        $hdata = view('admin.ajax_pv_transmission_application_details', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function transmission_application_detail_search(Request $request)
    {
        $status = $request->status;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $historydatas = PvTransmissionApplication::join('users', 'users.id', '=', 'pv_transmission_applications.user_id')->when($field != '', function ($query) use ($request) {
                $query->where('users.' . $request->field, 'LIKE', '%' . $request->fieldvalue . '%');
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
            ->get(['pv_transmission_applications.*', 'users.nickname', 'users.user_id']);

        $hdata = view('admin.ajax_pv_transmission_application_details_search', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function particul_transmission_application_detail(Request $request)
    {
        $id = $request->id;
        $historydatas = PvTransmissionApplication::from('pv_transmission_applications as pwh')
            ->join('users as u', 'pwh.user_id', '=', 'u.id')
            ->select('pwh.*', 'u.user_id', 'u.nickname')
            ->where('pwh.id', $id)
            ->get();

        $hdata = view('admin.ajax_particular_transmission_application_detail', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
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
        $permission = get_permission('Frequently Asked Questions');
        $faqcount = Faq::count();
        return view('admin.faq_list', compact('faqcount','permission'));
    }

    public function datatable_faq_list(Request $request){
        $permission = get_permission('Frequently Asked Questions');
        $totalRecords = Faq::count();
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = Faq::select('count(*) as allcount')->where('question', 'like', '%' . $searchValue . '%')->count();

        $records = Faq::skip($start)
            ->take($rowperpage)
            ->get();
        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;

            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

            if($record->used == 1){
                $use = 'used';
            }else{
                $use = "not used";
            }

            if($permission == 1){
                $correction = '<a href="' . route('admin.faqmodification', ['id' => $record->id]) . '" class="btn  btn-correction">Correction</a>';
            }else{
                $correction = '';
            }
            

            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
                "Category" => $record->category,
                "Notice_Title" => $record->question,
                "Used" => $use,
                "Registration_Date" => $rdate,
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

    
    function faq_search(Request $request)
    {
        $status = $request->status;
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $faqs = Faq::select()->when($field != '', function ($query) use ($request) {
                $query->where($request->field, 'LIKE', '%' . $request->fieldvalue . '%');
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
        $inquiriescount = Inquiry::count();
        return view('admin.one_on_one_inquiry', compact('inquiriescount'));
    }

    public function datatable_oneononeinquiry_list(Request $request){
        $permission = get_permission('One-on-one inquiry');
        $totalRecords = Inquiry::count();
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = Inquiry::select('count(*) as allcount')->where('subject', 'like', '%' . $searchValue . '%')->count();

        $records = Inquiry::skip($start)
            ->take($rowperpage)
            ->get();
        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;

            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

            if($record->answer != ''){
                $answer = 'Answer done';
            }else{
                $answer = 'Answer undone';
            }

            if($permission == 1){
                $content = '<a href='.route('admin.oneononeinquiryanswer', ['id' => $record->id]).' class="btn  btn-correction">look
                </a>';
            }else{
                $content = '';
            }
            

            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
                "ID" => $record->user->user_id,
                "Nickname" => $record->user->nickname,
                "Inquiry" => $record->inquiry,
                "Contents" => $content,
                "Answer" => $answer,
                "Inquiry_Date" => $rdate
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

    public function one_on_one_inquiry_search(Request $request)
    {
        $status = $request->status;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;



        $inquiries = Inquiry::join('users', 'users.id', '=', 'inquiries.user_id')->when($field != '', function ($query) use ($request) {
                if ($request->field == 'inquiry') {
                    $query->where($request->field, 'LIKE', '%' . $request->fieldvalue . '%');
                } else {
                    $query->where('users.' . $request->field, 'LIKE', '%' . $request->fieldvalue . '%');
                }
            })
            ->when($status != '', function ($query) use ($request) {
                if ($request->status == 'AC') {
                    $query->where('inquiries.answer', '!=', '');
                } else {
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
        $permission = get_permission('Notice');
        $noticescount = Notice::count();
        return view('admin.notice_list', compact('noticescount', 'permission'));
    }

    public function datatable_notice_list(Request $request)
    {
        $permission = get_permission('Notice');
        $totalRecords = Notice::count();
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = Notice::select('count(*) as allcount')->where('title', 'like', '%' . $searchValue . '%')->count();

        $records = Notice::skip($start)
            ->take($rowperpage)
            ->get();
        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;

            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

            if($permission == 1){
                $correction = '<a href="' . route('admin.noticemodification', ['id' => $record->id]) . '" class="btn  btn-correction">Correction</a>';
            }else{
                $correction = '';
            }
            

            if($record->used == 1){
                $use = 'used';
            }else{
                $use = "not used";
            }
            
            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
                "Notice_Title" => $record->title,
                "Used" => $use,
                "Views" => $record->views,
                "Registration_Date" => $rdate,
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

    public function notice_search(Request $request)
    {
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $notices = Notice::select()->when($field != '', function ($query) use ($request) {
                $query->where($request->field, 'LIKE', '%' . $request->fieldvalue . '%');
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


    public function registerAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'admin_id' => 'required|string|min:5|unique:admins,admin_id',
            'name' => 'required|string|min:5',
            'department' => 'required|string|min:5',
            'notes' => 'required|string|min:5',
            'password' => 'required|string|min:8|alpha_dash',
            'mobile' => 'required|string|min:9',
            'active' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $admin = Admin::create([
            'admin_id' => $request->admin_id,
            'name' => $request->name,
            'department' => $request->department,
            'notes' => $request->notes,
            'mobile' => $request->mobile,
            'status' => $request->active,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->route('admin.administratorlist')->with('toast_success', 'New Administrator Successfully Created!');
    }

    public function tradingSettings()
    {
        $setting = TradingSetting::first();
        if(!$setting){
            $setting = new TradingSetting();
            $setting->section_transaction_fee = 100;
            $setting->pursuit_transaction_fee = 100;
            $setting->save();
        }
        
        return view('admin.trading_setting', compact('setting'));
    }

    public function setTradingSettings(Request $request)
    {
        $params = $validator = Validator::make($request->all(), [
            'section_transaction_fee' => 'required|numeric',
            'pursuit_transaction_fee' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $setting = TradingSetting::first();
        if($setting){
            $setting->section_transaction_fee = $request->section_transaction_fee;
            $setting->pursuit_transaction_fee = $request->pursuit_transaction_fee;
            $setting->save();
        }else{
            $setting = TradingSetting::create($params);
        }

        return back()->with('toast_success', 'Trading Settings Updated Successfully!');
    }

    public function tPointDetailsByMember()
    {
        $historycount = TpointDetailsByMember::count();
        return view('admin.t_point_details_by_member', compact('historycount'));
    }

    public function datatable_t_point_member(Request $request){
       
        $totalRecords = TpointDetailsByMember::count();
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = TpointDetailsByMember::select('count(*) as allcount')->where('user_id', 'like', '%' . $searchValue . '%')->count();

        $records = TpointDetailsByMember::skip($start)
            ->take($rowperpage)
            ->get();
        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;

            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

            if($record->user->type == 'General Member'){
                $mtype = 'General Membership';
            }else{
                $mtype = 'MLM member';
            }

            if($record->increase == 1){
                $inc = '<span class="inc-text-changes">increase</span>';
            }else{
                $inc = '<span class="inc-text-change">decrease</span>';
            }

            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
                "Member_Type" => $mtype,
                "ID" => $record->user->user_id,
                "Nickname" => $record->user->nickname,
                "Increase" => $inc,
                "Quantity" => $record->quantity,
                "Contents" => $record->contents,
                "Application_Date_And_Time" => $rdate
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

    public function t_point_member_search(Request $request){
        $status = $request->status;
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $historydatas = TpointDetailsByMember::join('users', 'users.id', '=', 'tpoint_details_by_members.user_id')->when($field != '', function ($query) use ($request) {
                $query->where('users.' . $request->field, 'LIKE', '%' . $request->fieldvalue . '%');
            })
            ->when($status != '', function ($query) use ($request) {
                $query->where('tpoint_details_by_members.increase', '=', $request->status);
            })
            ->when($type != '', function ($query) use ($request) {
                $query->where('users.type', '=', $request->type);
            })
            ->when($startdate != '', function ($query) use ($request) {
                $query->where('tpoint_details_by_members.created_at', '>=', $request->startdate);
            })
            ->when($enddate != '', function ($query) use ($request) {
                $query->where('tpoint_details_by_members.created_at', '<=', $request->enddate);
            })
            ->get(['tpoint_details_by_members.*', 'users.nickname', 'users.user_id','users.type']);

        $hdata = view('admin.ajax_t_point_member_search', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function datatable_point_recharge_list(Request $request)
    {
        $permission = get_permission('Elim Point Application Details');
        $totalRecords = ElimPointApplication::count();
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = ElimPointApplication::select('count(*) as allcount')->where('user_id', 'like', '%' . $searchValue . '%')->count();

        $records = ElimPointApplication::with(['user'])->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;

            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

            if ($record->status == 'pending') {
                $status = '<span class="inc-text-change1">Pending</span>';
            } else if ($record->status == 'approved') {
                $status = '<span class="incas-text-changes">Approved</span>';
            } else {
                $status = '<span class="incas-text-changes text-danger">Cancelled</span>';
            }

            $viewdeposite = '<a href="#" class="btn  btn-correction" onclick="viewelimpointapplicationdetail('.$record->id.')">
            Look</a>';

           
            if ($record->status == 'pending') {
                if($permission == 1){
                    $Approval = '<span class="d-flex"><a href="#" class="btn  btn-correction mr-3" onclick="openapprovemodal('.$record->id.')">
                    Approval </a>
                    <a href="#" class="btn  btn-ends" onclick="opencancelmodal('.$record->id.')">
                    cancellation
                    </a></span>';
                }else{
                    $Approval = '';
                }
            }else if($record->status == 'approved'){
                $Approval = '<a href="#" class="btn btn-correction">
                Confirmed
                </a>';
            }else {
                $Approval = '';
            }


            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
                "Member_Type" => $record->user->type,
                "ID" => $record->user->user_id,
                "Nickname" => $record->user->nickname,
                "Amount" => $record->amount,
                "Status" => $status,
                "Viewdeposite" => $viewdeposite,
                "Approval" => $Approval,
                "Application_Date_And_Time" => $rdate
               
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

    public function view_elim_recharge_detail(Request $request){
        $id = $request->id;
    
        $recharge = ElimPointApplication::with(['user'])
            ->where('id', $id)
            ->get();

        $rechargedata = view('admin.ajax_view_elim_recharge_detail', compact('recharge'))->render();
        return response()->json(['status' => '200', 'msg' => $rechargedata]); 
    }

    public function elim_recharge_action(Request $request){
        $id = $request->id;
        $password = $request->password;
        $status = $request->status;

        $admin = Auth::guard('admin')->user();
        $user = User::find($admin->id);
        $user = Admin::where('admin_id', '=', $admin->admin_id)->first();   //get db User data   
        if (!Hash::check($password, $user->password)) {
            return response()->json(['status' => 500, 'msg' => 'password is incorrect']);
        }

        $PvConversionApplication = ElimPointApplication::findOrFail($id);
        $PvConversionApplication->status = $status;
        $PvConversionApplication->save();

        $historydatas = ElimPointApplication::with(['user'])->get();
        $hdata = view('admin.ajax_elim_recharge_detail', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function elim_point_recharge_search(Request $request){
        
        $status = $request->status;
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $historydatas = ElimPointApplication::join('users', 'users.id', '=', 'elim_point_applications.user_id')->when($field != '', function ($query) use ($request) {
                $query->where('users.' . $request->field, 'LIKE', '%' . $request->fieldvalue . '%');
            })
            ->when($status != '', function ($query) use ($request) {
                $query->where('elim_point_applications.status', '=', $request->status);
            })
            ->when($type != '', function ($query) use ($request) {
                $query->where('users.type', '=', $request->type);
            })
            ->when($startdate != '', function ($query) use ($request) {
                $query->where('elim_point_applications.created_at', '>=', $request->startdate);
            })
            ->when($enddate != '', function ($query) use ($request) {
                $query->where('elim_point_applications.created_at', '<=', $request->enddate);
            })
            ->get(['elim_point_applications.*', 'users.nickname', 'users.user_id','users.type']);

        $hdata = view('admin.ajax_elim_point_application_details_search', compact('historydatas'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function datatable_point_exchange_list(Request $request){
       
        $totalRecords = ElimPointExchangeHistory::count();
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = ElimPointExchangeHistory::select('count(*) as allcount')->where('user_id', 'like', '%' . $searchValue . '%')->count();

        $records = ElimPointExchangeHistory::with(['user'])->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;

            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));
            $look = '<a href="#" class="btn  btn-correction" onclick="viewelimpointexchangedetail('.$record->id.')">
            Look</a>';
            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
                "Member_Type" => $record->user->type,
                "ID" => $record->user->user_id,
                "Nickname" => $record->user->nickname,
                "Elim_Quantity_Before_Exhange" => $record->elim_points,
                "Tp_Quantity_After_Exhange" => $record->t_points,
                "Look" => $look,
                "Exchange_Date_And_Time" => $rdate
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

    public function view_elim_point_exchange_detail(Request $request){
        $id = $request->id;
    
        $exchange = ElimPointExchangeHistory::with(['user'])
            ->where('id', $id)
            ->get();

        $exchangedata = view('admin.ajax_view_elim_point_exchange_detail', compact('exchange'))->render();
        return response()->json(['status' => '200', 'msg' => $exchangedata]);
    }

    public function elim_point_exchange_search(Request $request){
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $historydata = ElimPointExchangeHistory::join('users', 'users.id', '=', 'elim_point_exchange_histories.user_id')->when($field != '', function ($query) use ($request) {
                $query->where('users.' . $request->field, 'LIKE', '%' . $request->fieldvalue . '%');
            })
            ->when($type != '', function ($query) use ($request) {
                $query->where('users.type', '=', $request->type);
            })
            ->when($startdate != '', function ($query) use ($request) {
                $query->where('elim_point_exchange_histories.created_at', '>=', $request->startdate);
            })
            ->when($enddate != '', function ($query) use ($request) {
                $query->where('elim_point_exchange_histories.created_at', '<=', $request->enddate);
            })
            ->get(['elim_point_exchange_histories.*', 'users.nickname', 'users.user_id','users.type']);

        $hdata = view('admin.ajax_elim_point_exchange_details', compact('historydata'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function datatable_point_transfer_list(Request $request){
        $totalRecords = ElimPointTransferHistory::count();
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = ElimPointTransferHistory::select('count(*) as allcount')->where('user_id', 'like', '%' . $searchValue . '%')->count();

        $records = ElimPointTransferHistory::with(['user'])->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;

            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));
            $look = '<a href="#" class="btn  btn-correction" onclick="viewelimpointtransferdetail('.$record->id.')">
            Look</a>';
            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
                "Member_Type" => $record->user->type,
                "ID" => $record->user->user_id,
                "Nickname" => $record->user->nickname,
                "Quantity" => $record->quantity,
                "Look" => $look,
                "Exchange_Date_And_Time" => $rdate
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

    public function view_elim_point_transfer_detail(Request $request){
        $id = $request->id;
    
        $transfer = ElimPointTransferHistory::with(['user'])
            ->where('id', $id)
            ->get();

        $exchangedata = view('admin.ajax_view_elim_point_transfer_detail', compact('transfer'))->render();
        return response()->json(['status' => '200', 'msg' => $exchangedata]);
    }

    public function elim_point_transfer_search(Request $request){
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $historydata = ElimPointTransferHistory::join('users', 'users.id', '=', 'elim_point_transfer_histories.user_id')->when($field != '', function ($query) use ($request) {
                $query->where('users.' . $request->field, 'LIKE', '%' . $request->fieldvalue . '%');
            })
            ->when($type != '', function ($query) use ($request) {
                $query->where('users.type', '=', $request->type);
            })
            ->when($startdate != '', function ($query) use ($request) {
                $query->where('elim_point_transfer_histories.created_at', '>=', $request->startdate);
            })
            ->when($enddate != '', function ($query) use ($request) {
                $query->where('elim_point_transfer_histories.created_at', '<=', $request->enddate);
            })
            ->get(['elim_point_transfer_histories.*', 'users.nickname', 'users.user_id','users.type']);

        $hdata = view('admin.ajax_elim_point_transfer_details', compact('historydata'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function mlm_member_search(Request $request){
      
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        $historydata =  User::where('type', User::MLM_MEMBER)
            ->when($field != '', function ($query) use ($request) {
                $query->where('users.' . $request->field, 'LIKE', '%' . $request->fieldvalue . '%');
            })
            ->when($startdate != '', function ($query) use ($request) {
                $query->where('created_at', '>=', $request->startdate);
            })
            ->when($enddate != '', function ($query) use ($request) {
                $query->where('created_at', '<=', $request->enddate);
            })
            ->get();


        $hdata = view('admin.ajax_mlm_member_list', compact('historydata'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    public function datatable_mlmmemberlist(Request $request){
        $permission = get_permission('MLM Membership Management');
        $totaldata = User::where('type', User::MLM_MEMBER)->get();
        $totalRecords = count($totaldata);
       
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = User::select('count(*) as allcount')->where('user_id', 'like', '%' . $searchValue . '%')->count();

        $records = User::where('type', User::MLM_MEMBER)->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        $i = 0;
        foreach ($records as $record) {
            $i++;

            $rdate = date('Y-m-d h:i:s', strtotime($record->created_at));

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

            if($record->status != 0){
                $state = 'active';
            }else{
                $state = 'inactive';
            }

            $view_tree = '';

            if($permission == 1){
                $view_tree = '<a href="' . route('admin.member-tree-sturcture', ['id' => $record->id]) . '" class="btn  btn-correction">View Tree</a>';
            }

            $data_arr[] = array(
                "No" => $i,
                "PK" => $record->id,
                "Member_Type" => $record->type,
                "ID" => $record->user_id,
                "Nickname" => $record->nickname,
                "Email" => $record->email,
                "Elim_Points" => $record->elim_points,
                "T_Points" => $record->t_points,
                "AP" => $ap,
                "EP" => $ep,
                "State" => $state,
                "Rdate" => $rdate,
                "View_Tree" => $view_tree
               
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

    public function datatable_trading_order_table(Request $request){
        $sectionTrade = SectionTrade::with('user')
        ->latest()->get()->toArray();
        $pursueTrade = PursueTrade::with('user')
            ->latest()->get()->toArray();

        $histories = array_merge($sectionTrade,$pursueTrade);
        $totalRecords = count($histories);


        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length");
        $search_arr = $request->get('search');

        $searchValue = $search_arr['value']; // Search value
        $records = array_slice($histories, $start, $rowperpage);
        $records = (array)$records;

        

        $data_arr = array();
        $i = 0;
        foreach ($records as $key => $record) {
            $i++;

            $rdate = date('Y-m-d h:i:s', strtotime($record['created_at']));

            $look = '<a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#trading-order-detail-modal">
            Look</a>';
            $statechance = ' <a href="#" class="btn  btn-correction" data-toggle="modal" data-target="#trading-order-pause-modal">
                Pause
                </a> 
                <a href="#" class="btn  btn-ends" data-toggle="modal" data-target="#trading-cancel-modal">
                End
            </a>';

            if($record['user']['pk'] != ''){
                $pk =  $record['user']['pk'];
            }else{
                $pk = '-';
            }

            if($record['state'] == 0){
                $state = 'Processing';
            }elseif($record['state'] == 1){
                $state = 'Paused';
            }else{
                $state = 'Completed';
            }

            $data_arr[] = array(
                "No" => $i,
                "PK" => $pk,
                "ID" => $record['user']['user_id'],
                "Nickname" => $record['user']['nickname'],
                "Trading_Type" => $record['currency'],
                "Subject" => $record['subject'],
                "State" => $state,
                "Detail" => $look,
                "Statechance" => $statechance,
                "Date" => $rdate
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecords,
            "aaData" => $data_arr
        );
        return response()->json($response);

    }

    public function trading_order_history(Request $request){
        $status = $request->status;
        $type = $request->type;
        $field = $request->field;
        $fieldvalue = $request->fieldvalue;
        $startdate = $request->startdate;
        $enddate = $request->enddate;
        
        $sectiondata = SectionTrade::join('users', 'users.id', '=', 'section_trades.user_id')->when($field != '', function ($query) use ($request) {
            $query->where('users.' . $request->field, 'LIKE', '%' . $request->fieldvalue . '%');
        })
        ->when($status != '', function ($query) use ($request) {
            $query->where('section_trades.state', '=', $request->status);
        })
        ->when($startdate != '', function ($query) use ($request) {
            $query->where('section_trades.created_at', '>=', $request->startdate);
        })
        ->when($enddate != '', function ($query) use ($request) {
            $query->where('section_trades.created_at', '<=', $request->enddate);
        })
        ->get(['section_trades.*', 'users.*'])->toArray();

        $pursuetradedata = PursueTrade::join('users', 'users.id', '=', 'pursue_trades.user_id')->when($field != '', function ($query) use ($request) {
            $query->where('users.' . $request->field, 'LIKE', '%' . $request->fieldvalue . '%');
        })
        ->when($status != '', function ($query) use ($request) {
            $query->where('pursue_trades.state', '=', $request->status);
        })
        ->when($startdate != '', function ($query) use ($request) {
            $query->where('pursue_trades.created_at', '>=', $request->startdate);
        })
        ->when($enddate != '', function ($query) use ($request) {
            $query->where('pursue_trades.created_at', '<=', $request->enddate);
        })
        ->get(['pursue_trades.*', 'users.*'])->toArray();

        $historydata = array_merge($sectiondata,$pursuetradedata);
        
        $hdata = view('admin.ajax_trading_order_history', compact('historydata'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);

        
    }
    

}