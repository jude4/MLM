<?php

namespace App\Http\Livewire\Auth\User;

use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class Register extends Component
{
    public $uuid;
    public $email;
    public $code= "";
    public $nickname;
    public $password;
    public $password_confirmation;
    public $agreement;
    public $emailVerified = false;
    public $emailMessage = "";
    public $verificationCode = "";

    protected $rules = [
        'uuid' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'code' => 'required|string',
        'nickname' => 'required|min:5|unique:users,nickname',
        'password' => 'required|alpha_dash|min:8|confirmed',
        'password_confirmation' => 'required',
        // 'agreement' => 'required',
    ];

    public function mount()
    {
        $this->uuid = User::generateUUID();
    }

    public function sendVerificatonCode()
    {
        $this->validate([
            'email' => 'required|string|email|max:255|unique:users',
        ]);

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

    public function register()
    {
        $this->validate();

        $user = User::create([
            'user_id' => $this->uuid,
            'nickname' => $this->nickname,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);
        return redirect()->route('user.dashboard');
    }


    public function render()
    {
        return view('livewire.auth.user.register')
        ->extends('layouts.authlayout')
        ->section('content');
    }
}
