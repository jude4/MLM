<?php

namespace App\Http\Livewire\Modals;

use App\Models\User;
use App\Traits\Toggleable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddMlmMember extends Component
{
    use Toggleable;

    public $uuid;
    public $email;
    public $password;
    public $password_confirmation;
    public $nickname;
    public $user_id;

    protected $listeners = ['addUser'];

    public function addUser($id)
    {
        $this->user_id = $id;
        $this->editMode = true;
    }

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
        $this->editMode = true;
        $this->validate();

        $user = User::create([
            'user_id' => $this->uuid,
            'nickname' => $this->nickname,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->giveParentById($this->user_id);

        return redirect()->route('user.pvmytree')->with('toast_success', 'New Member Added!');
    }

    public function render()
    {
        return view('livewire.modals.add-mlm-member');
    }
}
