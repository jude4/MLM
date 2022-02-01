<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\PvConversionApplication;
use App\Traits\Toggleable;
use Livewire\Component;

class ViewPvConversionApplication extends Component
{
    use Toggleable;

    public $application;

    protected $listeners = ['viewDetail'];

    public function mount()
    {
        $this->application = PvConversionApplication::first();
    }


    public function viewDetail($id)
    {
        $this->application = PvConversionApplication::findOrFail($id);
        $this->editMode = true;
    }

    public function render()
    {
        return view('livewire.admin.modals.view-pv-conversion-application');
    }
}
