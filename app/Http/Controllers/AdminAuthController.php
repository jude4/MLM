<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Permissions;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    //
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin()
    {
        return view('auth.admin.login');
    }

    /**
     * Show the application loginprocess.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        
        $this->validate($request, [
            'id' => 'required|string',
            'password' => 'required|string',
        ]);

        if (auth()->guard('admin')->attempt(['admin_id' => $request->input('id'), 'password' => $request->input('password')]))
        {

            $admin = auth()->guard('admin')->user();
            $id = $admin->id;
            $ses_data = [];

            $permissions = Permissions::leftjoin("user_permissions", function ($join) use ($id) {
                $join->on('user_permissions.permission_id', '=', 'permissions.id')->where('user_permissions.admin_id', '=',  $id);
            })
                ->select('permissions.*', 'user_permissions.id as user_permission_id', 'user_permissions.admin_id as admin_id', 'user_permissions.permission_id as permission_id', 'user_permissions.is_write as is_write', 'user_permissions.status as user_permission_status')
                ->get()
                ->toArray();
    
                $allowed = array();
                foreach($permissions as $permission){
                    if($permission['user_permission_id'] != '' || $id == '1'){
                        if($id == '1'){
                            $allowed[$permission['name']] = 1;
                        }else{
                            $allowed[$permission['name']] = $permission['is_write'];
                        }
                    }
                }
            $request->session()->put('allowed_permissions', $allowed);

            $admin->createLoginLog();
            
            return redirect()->route('admin.administratorlist')->with('toast_success', 'Logged In');
            
        } else {
            return back()->with('toast_error','your username and password are wrong.');
        }

    }

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    { 
        Admin::saveLogoutTransaction(Auth::guard('admin')->user()->id);
        auth()->guard('admin')->logout();
        Session::flush();        
        return redirect(route('admin.login'))->with('toast_success', 'You are logged out successfully');
    }
}
