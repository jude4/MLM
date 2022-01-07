<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //

    public function administratorList()
    {
        return view('admin.administrator_list');
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

}
