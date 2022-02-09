<?php

namespace App\Http\Controllers;
use App\Traits\TradeStatus;
use Livewire\Component;
use GuzzleHttp\Client;
use App\Models\Inquiry;
use App\Models\Notice;
use App\Models\Ranking;
use App\Models\User;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    use TradeStatus;

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
        $inquiriescount = count($inquiries);
        return view('user.first_inquiry', compact('inquiries','inquiriescount'));
    }

    public function search_inquiry(Request $request){
        $type = $request->type;
        $serachvalue = $request->serachvalue;

        $loginuser = Auth::user();
        $loginid = $loginuser['id'];

        $inquiries = Inquiry::join('users', 'users.id', '=', 'inquiries.user_id')->where('inquiries.user_id', $loginid)
        ->when($type == 'Contents', function ($query) use ($request) {
            $query->where('inquiries.inquiry', 'LIKE', '%' .$request->serachvalue. '%');
        })
        ->when($type == 'Writer', function ($query) use ($request) {
            $query->where('users.nickname', 'LIKE', '%' .$request->serachvalue. '%');
        })
        ->get();

        $hdata = view('user.ajax_first_inquiry', compact('inquiries'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);

    }

    public function serviceCenter()
    {
        $notices = Notice::where('used', true)->get();
        $noticecount = count($notices);
        return view('user.service_center', compact('notices','noticecount'));
    }

    public function serviceCenterDetail($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->views++;
        $notice->save();
        return view('user.service_center_detail', compact('notice'));
    }

    public function search_notice(Request $request){
        $type = $request->type;
        $serachvalue = $request->serachvalue;

        $notices = Notice::where('used', true)
        ->when($type == 'Contents', function ($query) use ($request) {
            $query->where('content', 'LIKE', '%' .$request->serachvalue. '%');
        })
        ->when($type == 'Subject', function ($query) use ($request) {
            $query->where('title', 'LIKE', '%' .$request->serachvalue. '%');
        })
        ->get();
        

        $hdata = view('user.ajax_service_center_detail', compact('notices'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);

    }

    public function search_faq(Request $request){
        $type = $request->type;
        $serachvalue = $request->serachvalue;
        $category = $request->category;


        $faqdata = Faq::where('category', $category)
        ->when($type == 'Contents', function ($query) use ($request) {
            $query->where('answer', 'LIKE', '%' .$request->serachvalue. '%');
        })
        ->when($type == 'Subject', function ($query) use ($request) {
            $query->where('question', 'LIKE', '%' .$request->serachvalue. '%');
        })
        ->get();

        $hdata = view('user.ajax_faq_detail', compact('faqdata'))->render();
        return response()->json(['status' => '200', 'msg' => $hdata]);
    }

    

    public function search_currencies(Request $request){
       $searchvalue = $request->searchvalue;

       $api = new \Binance\API($this->default_api_key, $this->default_secret_key);

        if($searchvalue == ''){
            $url = $api->base . 'v3/ticker/24hr';
            $client = new Client();

            $request = $client->request('GET', $url);
            $dataBody = json_decode($request->getBody()->getContents());
            $currencies = [];
            $currenciesdata = collect($dataBody);
            $hdata = view('user.ajax_trading_second', compact('currenciesdata'))->render();
        }else{
            $searchvalue = strtoupper($searchvalue);
            $url = $api->base . 'v3/ticker/24hr?symbol='.$searchvalue;
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_URL, $url);

            $result = curl_exec($ch);
            $result = json_decode($result, true);

            if(isset($result['code'])){
                $currency = array();
                $hdata = view('user.ajax_trading', compact('currency'))->render();
            }else{
                $currency = (array) $result;
                $hdata = view('user.ajax_trading', compact('currency'))->render();
            } 
        }
       
       return response()->json(['status' => '200', 'msg' => $hdata]);
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
