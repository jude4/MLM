<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\ElimPointApplication;
use App\Traits\Toggleable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ElimPointApplicationDecline extends Component
{

    use Toggleable;
    public $recharge;
    public  $password;
    public $pass;
    public $comment;

    protected $listeners = [
        'declinal'
    ];

    protected $rules = [
        'password' => 'required|string'
    ];

    public function decline()
    {
        $attributes = $this->validate();
        
        if(Hash::check($this->password, Auth::guard('admin')->user()->password)){
            $this->recharge->status =1;
            // $this->recharge->comment = $this->comment;
            $this->recharge->save();
            return redirect()->route('admin.elimpointapplicatondetails')->with('toast_success', 'Successfully Declined!');
        }else{
            $this->addError('password', 'Incorrect password');
        }
        
    }

    public function mount()
    {
        $this->recharge = ElimPointApplication::first();
    }

    public function declinal($id)
    {
        $this->recharge = ElimPointApplication::findOrFail($id);
        $this->editMode = true;

    }

    public function render()
    {
        return view('livewire.admin.modals.elim-point-application-decline');
    }
}
