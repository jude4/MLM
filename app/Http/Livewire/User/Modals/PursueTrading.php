<?php

namespace App\Http\Livewire\User\Modals;

use App\Traits\Toggleable;
use Livewire\Component;

class PursueTrading extends Component
{

    use Toggleable;

    public function render()
    {
        return view('livewire.user.modals.pursue-trading');
    }
}
