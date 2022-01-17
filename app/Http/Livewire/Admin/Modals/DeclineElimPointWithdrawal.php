<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\PvWithDrawalRequestHistory;
use App\Traits\Toggleable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class DeclineElimPointWithdrawal extends Component
{
    use Toggleable;

    public $withdrawal;
    public  $password;
    public $comment;

    protected $listeners = [
        'decline'
    ];

    protected $rules = [
        'password' => 'required|string'
    ];

    public function cancel()
    {
        $attributes = $this->validate();
        if (Hash::check($this->password, Auth::guard('admin')->user()->password)) {
            $this->withdrawal->status = 1;
            // $this->withdrawal->comment = $this->comment;
            $this->withdrawal->save();

            $this->withdrawal->save();
            return redirect()->route('admin.pvwithdrawalrequesthistory')->with('toast_success', 'Successfully Approved!');
        } else {
            $this->addError('password', 'Incorrect password');
        }
    }

    public function mount()
    {
        $this->withdrawal = PvWithDrawalRequestHistory::first();
    }

    public function decline($id)
    {
        $this->withdrawal = PvWithDrawalRequestHistory::findOrFail($id);
        $this->editMode = true;
    }

    public function render()
    {
        return view('livewire.admin.modals.decline-elim-point-withdrawal');
    }
}