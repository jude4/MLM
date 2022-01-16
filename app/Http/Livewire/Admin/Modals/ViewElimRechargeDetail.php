<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\ElimPointApplication;
use App\Models\User;
use App\Traits\Toggleable;
use Livewire\Component;

class ViewElimRechargeDetail extends Component
{
    use Toggleable;
    public $recharge;

    protected $listeners = ['viewDetail'];

    public function mount()
    {
        $this->recharge = ElimPointApplication::first();
    }


    public function viewDetail($id)
    {
        $this->reaharge = ElimPointApplication::findOrFail($id);
        $this->editMode = true;
    }

    public function confirm()
    {
        $this->recharge->status = 2;
        $this->recharge->save();
        return redirect()->route('admin.elimpointapplicatondetails')->with('toast_success', 'Successfully Approed!');
    }

    public function render()
    {
        return view('livewire.admin.modals.view-elim-recharge-detail');
    }
}