<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\PvTransmissionApplication;
use App\Traits\Toggleable;
use Livewire\Component;

class ViewPvTransmission extends Component
{
    use Toggleable;
    
    public $data;

    protected $listeners = ['viewDetail'];

    public function mount()
    {
        $this->data = PvTransmissionApplication::with('user', 'reciever')->first();
    }


    public function viewDetail($id)
    {
        $this->data = PvTransmissionApplication::with('user', 'reciever')->findOrFail($id);
        $this->editMode = true;
    }

    public function render()
    {
        return view('livewire.admin.modals.view-pv-transmission');
    }
}