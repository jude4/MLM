<?php

namespace App\Http\Livewire\Modals;

use App\Models\ElimPointTransferHistory;
use App\Traits\Toggleable;
use Livewire\Component;

class ViewElimPointTransferHistory extends Component
{

    use Toggleable;

    public $transfer;

    protected $listeners = ['viewDetail'];

    public function mount()
    {
        $this->transfer = ElimPointTransferHistory::with('user', 'reciever')->first();
    }

    public function viewDetail($id)
    {
        $this->transfer = ElimPointTransferHistory::with('user', 'reciever')->findOrFail($id);
        $this->editMode = true;

    }
    
    public function render()
    {
        return view('livewire.modals.view-elim-point-transfer-history');
    }
}