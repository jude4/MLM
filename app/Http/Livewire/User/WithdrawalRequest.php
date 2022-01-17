<?php

namespace App\Http\Livewire\User;

use App\Models\PvWithDrawalRequestHistory;
use App\Models\User;
use Livewire\Component;

class WithdrawalRequest extends Component
{
    public $amount, $withdrawal_fee = 100, $account_number, $bank_name, $name_of_account;

    protected $rules = [
        'amount' => ['required', 'numeric'],
        'account_number' => ['required', 'numeric'],
        'bank_name' => ['required', 'string'],
        'name_of_account' => ['required', 'string'],
    ];

    public function updatedAmount($value)
    {
        // $value = $value ? $value : 0;
        // $this->amount = $value - $this->withdrawal_fee; 
        // $this->withdrawal_fee = 100;
    }


    public function getMaxPv()
    {
        if (auth()->user()->available_pv > $this->withdrawal_fee) {
            $this->amount = auth()->user()->available_pv - $this->withdrawal_fee; 
        } else {
            return redirect()->route('user.krwwithdrawalrequest')->with('toast_error', 'Error: Insufficient Pv');
        }
    }
    
    public function withdraw()
    {
        $attributes = $this->validate();

        if (auth()->user()->available_pv > $this->amount) {

            $attributes['user_id'] = auth()->id();

            PvWithDrawalRequestHistory::create($attributes);

            $this->updatePvBalance();

            return redirect()->route('user.krwwithdrawalrequest')->with('toast_success', 'Withdrawal Successful!');
        } else {
            return redirect()->route('user.krwwithdrawalrequest')->with('toast_error', 'Error: Insufficient PV point');
        }
    }

    public function updatePvBalance()
    {
        $user = User::findOrFail(auth()->id());
        $user->available_pv = $this->withdrawal_fee;
        $user->save();
    }

    public function render()
    {
        return view('livewire.user.withdrawal-request');
    }
}