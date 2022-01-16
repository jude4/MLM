<?php

namespace App\Http\Livewire\User;

use App\Models\ElimPointApplication;
use App\Models\User;
use Livewire\Component;

class ElimPointRechargeDetails extends Component
{
    public $PENDING = 0;
    public $CANCELLATION = 1;
    public $APPROVED = 2;

    public $user;
    
    public function render()
    {
        $rechargeLists = ElimPointApplication::where('user_id', auth()->id())->latest()->get();
        
        return view('livewire.user.elim-point-recharge-details', compact('rechargeLists'));
    }
}