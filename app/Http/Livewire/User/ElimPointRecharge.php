<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ElimPointRecharge extends Component
{
    public $amount, $account_number, $bank_name;

    public $virtual_account_number = '3000234342' , $our_bank = 'Korean-Zenith Bank';
    
    public function render()
    {
        return view('livewire.user.elim-point-recharge');
    }
}