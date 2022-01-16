<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\ElimPointApplication;
use App\Models\User;
use App\Traits\Toggleable;
use Livewire\Component;

class ViewElimRechargeDetail extends Component
{
    use Toggleable;
    public $user;

    protected $listeners = ['viewDetail'];

    public function mount()
    {
        $this->user = ElimPointApplication::first();
    }


    public function viewDetail($id)
    {
        $this->user = User::findOrFail($id);
       
        $this->editMode = true;
    }

    public function render()
    {
        return view('livewire.admin.modals.view-elim-recharge-detail');
    }
}