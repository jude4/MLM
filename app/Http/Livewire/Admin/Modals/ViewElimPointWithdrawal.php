<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\PvWithDrawalRequestHistory;
use App\Traits\Toggleable;
use Livewire\Component;

class ViewElimPointWithdrawal extends Component
{
    use Toggleable;
    public $withdrawal;

    protected $listeners = ['viewDetail'];

    public function mount()
    {
        $this->withdrawal = PvWithDrawalRequestHistory::with('user')->first();
    }


    public function viewDetail($id)
    {
        $this->withdrawal = PvWithDrawalRequestHistory::with('user')->findOrFail($id);
        $this->editMode = true;
    }

    public function render()
    {
        return view('livewire.admin.modals.view-elim-point-withdrawal');
    }
}