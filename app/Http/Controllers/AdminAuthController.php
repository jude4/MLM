<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
            $admin->createLoginLog();
            
            Session::put('success','You are Login successfully!!');
            return redirect()->route('admin.administratorlist')->with('success', 'Logged In');
            
        } else {
            return back()->with('error','your username and password are wrong.');
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
        Session::put('success','You are logout successfully');        
        return redirect(route('admin.login'));
    }
}
