<?php

namespace App\Http\Livewire\Auth\User;

use Livewire\Component;
use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class FindPassword extends Component
{
    public $uuid;
    public $email;
    public $code= "";
    public $password;
    public $password_confirmation;
    public $agreement;
    public $emailVerified = false;
    public $emailMessage = "";
    public $verificationCode = "";

    protected $rules = [
        'uuid' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'code' => 'required|string',
        'password' => 'required|alpha_dash|min:8|confirmed',
        'password_confirmation' => 'required',
        // 'agreement' => 'required',
    ];

    public function sendVerificatonCode()
    {
        $this->validate([
            'uuid' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $user = User::Where('user_id', $this->uuid)->where('email', $this->email)->first();
        if ($user == null) {
            $this->addError('email', 'The details you provided does not match our records');
            return;
        }

        $this->verificationCode = random_int(100000, 999999);

        $details = [
            'title' => "elim verification code",
            'body' => "Your verification code is $this->verificationCode"
        ];

        Mail::to($this->email)->send(new SendMail($details));

        $this->emailMessage = "A verification code has been sent to $this->email Please input the code below";
    }

    public function confirmVerificationCode()
    {
        if ($this->code != $this->verificationCode || empty($this->code)) {
            $this->emailMessage = '';
            $this->emailVerified = false;
            $this->addError('code', 'Invalid code, please try again');
            return;
        }
        $this->resetValidation('code');
        $this->emailMessage = "code has been verified";
        $this->emailVerified = true;
    }

    public function resetPassword()
    {
        $this->validate();

        $user = User::Where('user_id', $this->uuid)->where('email', $this->email)->first();
        $user->password = Hash::make($this->password);
        $user->save();
        Auth::login($user);
        return redirect()->route('user.dashboard');
    }


    public function render()
    {
        return view('livewire.auth.user.find-password')
        ->extends('layouts.authlayout')
        ->section('content');
    }
}
