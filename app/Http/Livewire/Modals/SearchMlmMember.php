<?php

namespace App\Http\Livewire\Modals;

use App\Models\User;
use App\Traits\Toggleable;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SearchMlmMember extends Component
{
    use Toggleable;
    public $search = '';
    public $by = 'id';
    public $users = [];
    public $selected = [];
    public $addId;

    protected $listeners = ['setAddId'];

    public function mount()
    {
        $this->users=User::where('referred_by', null)->where('id', '!=', Auth::user()->id)->limit(5)->get();
    }

    public function setAddId($id)
    {
        $this->addId = $id;
        $this->editMode = true;
    }

    public function search()
    {
        $this->editMode = true;
        $this->users = User::where('referred_by', null)->where('id', '!=', Auth::user()->id)->where($this->by, 'LIKE', "%$this->search%")->limit(5)->get();
    }

    public function addUsers()
    {
        $this->emit('addUsers', $this->addId, $this->selected);
    }

    function updatedSelected(){
        $this->editMode = true;
        foreach ($this->selected as $key => $value) {
            $this->selected[$key] = $key;
            if ($value == false) {
                unset($this->selected[$key]); 
            }
            $this->selected = (array) $this->selected;
        }
    }

    public function render()
    {
        return view('livewire.modals.search-mlm-member');
    }
}
