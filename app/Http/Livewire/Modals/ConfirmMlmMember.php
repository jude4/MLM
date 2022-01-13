<?php

namespace App\Http\Livewire\Modals;

use App\Models\User;
use App\Traits\Toggleable;
use Livewire\Component;

class ConfirmMlmMember extends Component
{
    use Toggleable;

    public $addId;
    public $user_ids;

    protected $listeners = ['addUsers'];
    

    public function addUsers(int $id, array $user_ids)
    {
        $this->editMode = true;
        $this->addId = $id;
        $this->user_ids = $user_ids;
    }

    public function initiate(){
        $user = User::findOrFail($this->addId);
        foreach ($this->user_ids as $childId) {
            $user->makeChildById($childId);
        }
        return redirect()->route('user.pvmytree')->with('toast_success', 'MLM Member(s) Successfully Added');
    }

    public function render()
    {
        return view('livewire.modals.confirm-mlm-member');
    }
}
