<?php

namespace App\Http\Livewire\Modals;

use App\Models\User;
use App\Traits\Toggleable;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ConfirmMlmMember extends Component
{
    use Toggleable;

    public $addId;
    public $user_ids;
    public $authUser;

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
        $this->authUser = Auth::check() ? 'user' : 'admin';
        
        if ($this->authUser == 'user') {
            return redirect()->route('user.pvmytree')->with('toast_success', 'MLM Member(s) Successfully Added');
        } else {            
             return redirect()->route('admin.mlmusermanagement')->with('toast_success', 'New Member Added!'); 
         }
    
    }

    public function render()
    {
        return view('livewire.modals.confirm-mlm-member');
    }
}