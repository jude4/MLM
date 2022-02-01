<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class MlmTreeStructure extends Component
{
    public $user;
    
    public function render()
    {
        return view('livewire.admin.mlm-tree-structure');
    }
}