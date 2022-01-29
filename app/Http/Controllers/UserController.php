<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Notice;
use App\Models\Ranking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //

    public function dashboard()
    {
        $thisMonthsRanking = Ranking::thisMonthsRanking();
        $overallRanking = Ranking::overallRanking();
        return view('user.dashboard', compact('thisMonthsRanking', 'overallRanking'));
    }

    public function findResult(Request $request)
    {
        $email = $request->email;
        $user = User::firstWhere('email', $email);
        $context = ['user_id' => $user?$user->user_id:null];
        return view('auth.user.find_id_result', $context);
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();

        if ($request->password) { 
            $validator = Validator::make($request->all(), [
                'password' => 'required|alpha_dash|min:8',
            ]);
            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }
            $user->password = Hash::make($request->password);
            $user->save();
        }

        
        if ($request->nickname != $user->nickname ) {
            $validator = Validator::make($request->all(), [
                'nickname' => 'required|min:5|unique:users,nickname',
            ]);
            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }
        }

        $user->upbit_access_key = $request->upbit_access_key;
        $user->upbit_secret_key = $request->upbit_secret_key;
        $user->nickname = $request->nickname;
        $user->save();
        return back()->with('toast_success', 'Profile Updated Successfully!');
    }

    public function updateProfilePicture(Request $request)
    {
        
    }

    public function serviceCenterRegistration()
    {
        return view('user.service_center_registration');
    }

    public function createInquiry(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject' => 'required|string|min:8',
            'inquiry' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        Auth::user()->inquiries()->create([
            'subject' => $request->subject,
            'inquiry' => $request->inquiry,
        ]);
        return redirect()->route('user.firstinquiry')->with('toast_success', 'Inquiry Created Successfully!');
    }

    public function firstInquiry()
    {
        $inquiries = Auth::user()->inquiries;
        return view('user.first_inquiry', compact('inquiries'));
    }

    public function serviceCenter()
    {
        $notices = Notice::where('used', true)->get();
        return view('user.service_center', compact('notices'));
    }

    public function serviceCenterDetail($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->views++;
        $notice->save();
        return view('user.service_center_detail', compact('notice'));
    }

    public function pvMyTree()
    {
        return view('user.pv_my_tree');
    }

    public function pvAccumulationHistory()
    {
        return view('user.pv_check_accumulation_history');
    }

    public function pvUsageHistory()
    {
        return view('user.pv_check_usage_history');
    }
}
