<?php

namespace App\Http\Livewire\Auth\User;

use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class FindId extends Component
{

    public $uuid;
    public $email;
    public $code= "";
    public $emailVerified = false;
    public $emailMessage = "";
    public $verificationCode = "";

    protected $rules = [
        'email' => 'required|string|email|max:255',
        'code' => 'required|string',
    ];

    public function sendVerificatonCode()
    {
        $this->validate([
            'email' => 'required|string|email|max:255',
        ]);

        $user = User::where('email', $this->email)->first();
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


    public function render()
    {
        return view('livewire.auth.user.find-id')
        ->extends('layouts.authlayout')
        ->section('content');
    }
}
