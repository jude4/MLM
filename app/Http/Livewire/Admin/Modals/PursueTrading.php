<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\PursueTrade;
use App\Traits\Toggleable;
use Livewire\Component;

class PursueTrading extends Component
{

    use Toggleable;
    public $pursue;

    protected $listeners = ['pursueTradeForm'];

    public function pursueTradeForm($id)
    {
        $this->pursue = PursueTrade::find($id);
        $this->editMode = true;
    }

    public function mount()
    {
        $this->pursue = PursueTrade::first();
    }
    

    public function render()
    {
        return view('livewire.admin.modals.pursue-trading');
    }
}