<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\ElimPointApplication;
use App\Traits\Toggleable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ElimPointApplicationApprove extends Component
{
    use Toggleable;

    public $recharge;
    public  $password;
    public $comment;

    protected $listeners = [
        'approval'
    ];

    protected $rules = [
        'password' => 'required|string'
    ];

    public function approve()
    {
        $attributes = $this->validate();
        if(Hash::check($this->password, Auth::guard('admin')->user()->password)){
            $this->recharge->status =2;
            // $this->recharge->comment = $this->comment;
            $this->recharge->save();
            $this->recharge->user->type = 1;
            $this->recharge->user->save();
            return redirect()->route('admin.elimpointapplicatondetails')->with('toast_success', 'Successfully Approved!');
        }else{
            $this->addError('password', 'Incorrect password');
        }
        
    }

    public function mount()
    {
        $this->recharge = ElimPointApplication::first();
    }

    public function approval($id)
    {
        $this->reaharge = ElimPointApplication::findOrFail($id);
        $this->editMode = true;

    }

    public function render()
    {
        return view('livewire.admin.modals.elim-point-application-approve');
    }
}
