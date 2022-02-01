<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class MlmMemberTreeList extends Component
{
    public $search = '';
    public $foo, $page = 1;

    protected $queryString = [
        'foo',
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];


    public function mount()
    {
        $this->fill(request()->only('search', 'page'));
    }
    
    public function render()
    {
        $users = User::where('type', User::MLM_MEMBER)->search($this->search)->latest()->get();
        return view('livewire.admin.mlm-member-tree-list', compact('users'));
    }
}