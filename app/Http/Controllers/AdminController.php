<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Faq;
use App\Models\User;
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

        return view('admin.administrator_list', compact('admins'));
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
        return view('admin.member_list', compact('users'));
    }

    public function memberModification($id)
    {   
        $user = User::findOrFail($id);
        return view('admin.member_modification', compact('user'));
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

}
