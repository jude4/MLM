<?php

namespace App\Http\Livewire\Admin\Modals;

use Livewire\Component;

class PauseTrade extends Component
{
    protected $listeners = ['pauseTrade'];

    public function mount()
    {
        
    }

    public function pauseTrade($id, $type)
    {
        dump($type);   
    }
    
    public function render()
    {
        return view('livewire.admin.modals.pause-trade');
    }
}