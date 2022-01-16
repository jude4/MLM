<?php

namespace App\Http\Livewire\User;

use App\Models\PvWithDrawalRequestHistory;
use Livewire\Component;

class WithdrawalRequest extends Component
{
    public $amount, $withdrawal_fee, $account_number, $bank_name, $name_of_account;
    
    protected $rules = [
        'amount' => ['required', 'numeric'],
        'withdrawal_fee' => ['required', 'numeric'],
        'account_number' => ['required', 'numeric'],
        'bank_name' => ['required', 'string'],
        'name_of_account' => ['required', 'string'],
    ];

    public function submit()
    {
        $attributes = $this->validate();

        

        $attributes['user_id'] = auth()->id();

        PvWithDrawalRequestHistory::create($attributes);

        return redirect()->route('user.krwwithdrawalrequest')->with('toast_success', 'Withdrawal Successful!');
    }
    
    public function render()
    {
        return view('livewire.user.withdrawal-request');
    }
}