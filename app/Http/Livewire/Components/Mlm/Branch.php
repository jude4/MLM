<?php

namespace App\Http\Livewire\Components\Mlm;

use Livewire\Component;

class Branch extends Component
{

    public $child;
    
    public function mount($child)
    {
        $this->child = $child;
    }

    public function render()
    {
        return view('livewire.components.mlm.branch');
    }
}
