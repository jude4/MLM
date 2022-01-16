<?php

namespace App\Http\Livewire\User;

use App\Models\PvWithDrawalRequestHistory;
use Livewire\Component;

class WithdrawalApplicationList extends Component
{
    public $count = 0;
    
    public function render()
    {
        $withdrawalLists = PvWithDrawalRequestHistory::where('user_id', auth()->id())->latest()->get();
        
        return view('livewire.user.withdrawal-application-list', compact('withdrawalLists'));
    }
}