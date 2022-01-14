<?php

namespace App\Http\Livewire\Admin;

use App\Models\ElimPointTransferHistory as ModelsElimPointTransferHistory;
use Livewire\Component;

class ElimPointTransferHistory extends Component
{
    public $count = 0;
    public function render()
    {
        $count = $this->count;
        $histories = ModelsElimPointTransferHistory::with('user')->latest()->get();
        return view('livewire.admin.elim-point-transfer-history', compact('histories', 'count'));
    }
}