<?php

namespace App\Http\Livewire\User;

use App\Models\PursueTrade;
use App\Models\SectionTrade;
use App\Traits\TradeStatus;
use Livewire\Component;

class MyTrading extends Component
{
    use TradeStatus;

    public $mergedTrade = [];
    public $transaction = [];

    public function mout()
    {
        $segmentTrade = SectionTrade::where('user_id', auth()->id())->distinct()->latest()->get();
        $pursueTrade = PursueTrade::where('user_id', auth()->id())->distinct()->latest()->get();
        $data = collect($segmentTrade->concat($pursueTrade));

        $this->mergedTrade =  $data->map(function ($item) {
            return array_push($this->transaction, $item);
        });
    }
    
    public function render()
    {
        return view('livewire.user.my-trading');
    }
}