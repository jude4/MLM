<?php

namespace App\Http\Livewire\User\Modals;

use App\Models\PvTransmissionApplication;
use App\Traits\Toggleable;
use Livewire\Component;

class ViewPvTransferRequest extends Component
{
    use Toggleable;

    public $data;

    protected $listeners = ['viewDetail'];

    public function mount()
    {
        $this->data = PvTransmissionApplication::with('user')->first();
    }


    public function viewDetail($id)
    {
        $this->data = PvTransmissionApplication::with('user')->findOrFail($id);
        $this->editMode = true;
    }

    public function render()
    {
        return view('livewire.user.modals.view-pv-transfer-request');
    }
}