<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function findResult(Request $request)
    {
        $email = $request->email;
        $user = User::firstWhere('email', $email);
        $context = ['user_id' => $user?$user->user_id:null];
        return view('auth.user.find_id_result', $context);
    }
}
