<?php

namespace App\Http\Livewire\User;

use App\Models\ElimPointApplication;
use Livewire\Component;

class ElimPointRecharge extends Component
{
    public $amount, $account_number, $bank_name, $name_of_depositor;

    public $virtual_account_number = '3000234342' , $our_bank = 'Korean-Zenith Bank';
    
    protected $rules = [
        'amount' => ['required', 'numeric'],
        'virtual_account_number' => ['required', 'numeric'],
        'our_bank' => ['required', 'string'],
        'bank_name' => ['required', 'string'],
        'account_number' => ['required', 'numeric'],
        'name_of_depositor' => ['required', 'string']
    ];

    public function mount()
    {
        $this->name_of_depositor = auth()->user()->nickname;
    }

    public function submit()
    {
        $attributes = $this->validate();
        $attributes['user_id'] = auth()->id();
        
        ElimPointApplication::create($attributes);

        return redirect()->route('user.elimpointviewdetail')->with('toast_success', 'Successful!');
    }

    public function render()
    {
        return view('livewire.user.elim-point-recharge');
    }
}