<?php

namespace App\Http\Livewire\User\Modals;

use App\Models\User;
use App\Traits\Toggleable;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SearchMember extends Component
{
    use Toggleable;
    public $search = '';
    public $by = 'id';
    public $users = [];
    public $selected = [];
    public $addId;
    public $userId;

    protected $listeners = ['setAddId'];

    public function mount()
    {
        $this->users = User::where('id', '!=', Auth::user()->id)->limit(5)->get();
        
    }

    public function setAddId($id)
    {
        $this->addId = $id;
        $this->users = User::where('id', '!=', auth()->id())->limit(5)->get();
        $this->editMode = true;
    }

    public function search()
    {
        $this->editMode = true;
       $this->users = User::where($this->by, 'LIKE', '%' . $this->search . '%')->limit(5)->get();
    }

    function updatedSelected()
    {
        $this->editMode = true;
        $index = 0;
        foreach ($this->selected as $key => $value) {
            $this->selected[$index] = $key;
            if ($value == false) {
                unset($this->selected[$key]);
            }
            $this->selected = (array) $this->selected;
            $index++;
        }

        $this->userId = $this->selected[0];
    }
    
    public function render()
    {
        return view('livewire.user.modals.search-member');
    }
}