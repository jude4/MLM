<?php

namespace App\Http\Livewire\User;

use App\Models\PvTransmissionApplication;
use Livewire\Component;

class PvTransferRequestList extends Component
{
    public $count = 0;
    
    public function render()
    {
        $histories = PvTransmissionApplication::where('user_id', auth()->id())->get();
        return view('livewire.user.pv-transfer-request-list', compact('histories'));
    }
}