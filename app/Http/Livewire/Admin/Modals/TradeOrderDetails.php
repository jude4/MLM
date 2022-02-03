<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\PursueTrade;
use App\Models\SectionTrade;
use App\Traits\Toggleable;
use Livewire\Component;

class TradeOrderDetails extends Component
{
    use Toggleable;

    public $section, $pursue;

    protected $listeners = ['sectionTradeForm'];

    public function mount()
    {
        $this->section = SectionTrade::first();
    }

    public function sectionTradeForm($id)
    {
        $this->section = SectionTrade::findOrFail($id);
        $this->editMode = true;
    }
    public function render()
    {
        return view('livewire.admin.modals.trade-order-details');
    }
}