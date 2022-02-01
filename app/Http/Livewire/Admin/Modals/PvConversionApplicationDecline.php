<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\PvConversionApplication;
use App\Traits\Toggleable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class PvConversionApplicationDecline extends Component
{

    use Toggleable;

    public $application;
    public  $password;

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
            $this->application->decline();
            return redirect()->route('admin.pvconversionapplicationdetails')->with('toast_success', 'Successfully Declined!');
        }else{
            $this->addError('password', 'Incorrect password');
        }
        
    }

    public function mount()
    {
        $this->application = PvConversionApplication::first();
    }

    public function declinal($id)
    {
        $this->application = PvConversionApplication::findOrFail($id);
        $this->editMode = true;

    }

    public function render()
    {
        return view('livewire.admin.modals.pv-conversion-application-decline');
    }
}
