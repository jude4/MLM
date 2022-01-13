<?php

namespace App\Http\Livewire\Modals;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddMlmMember extends Component
{
    public $uuid;
    public $email;
    public $password;
    public $password_confirmation;
    public $nickname;

    protected $rules = [
        'uuid' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'nickname' => 'required|min:5|unique:users,nickname',
        'password' => 'required|alpha_dash|min:8|confirmed',
        'password_confirmation' => 'required',
        // 'agreement' => 'required',
    ];

    public function mount()
    {
        $this->uuid = User::generateUUID();
    }

    public function addMember()
    {
        $this->validate();

        $user = User::create([
            'user_id' => $this->uuid,
            'nickname' => $this->nickname,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->giveParentById(Auth::user()->id);

        return redirect()->route('user.pvmytree')->with('toast_success', 'New Member Added!');
    }

    public function render()
    {
        return view('livewire.modals.add-mlm-member');
    }
}
