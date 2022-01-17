<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\ElimPointExchangeHistory;
use App\Traits\Toggleable;
use Livewire\Component;

class ViewElimPointExchangeHistory extends Component
{
    use Toggleable;
    
    public $exchange;

    protected $listeners = ['viewDetail'];

    public function mount()
    {
        $this->exchange = ElimPointExchangeHistory::with('user')->first();
    }


    public function viewDetail($id)
    {
        $this->exchange = ElimPointExchangeHistory::with('user')->findOrFail($id);
        $this->editMode = true;
    }

    public function render()
    {
        return view('livewire.admin.modals.view-elim-point-exchange-history');
    }
}