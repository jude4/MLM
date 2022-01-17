<?php

namespace App\Http\Livewire\User\Modals;

use App\Models\PvWithDrawalRequestHistory;
use App\Traits\Toggleable;
use Livewire\Component;

class ViewWithdrawalDetail extends Component
{
    use Toggleable;

    public $withdrawal;

    protected $listeners = ['viewDetail'];

    public function viewDetail($id)
    {
        $this->withdrawal = PvWithDrawalRequestHistory::with('user')->findOrFail($id);   
        $this->editMode = true;
    }

    public function  mount()
    {
        $this->withdrawal = PvWithDrawalRequestHistory::with('user')->where('user_id', auth()->id())->first();   
    }
    
    public function render()
    {
        return view('livewire.user.modals.view-withdrawal-detail');
    }
}