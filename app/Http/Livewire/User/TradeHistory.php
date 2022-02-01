<?php

namespace App\Http\Livewire\User;

use App\Traits\TradeStatus;
use GuzzleHttp\Client;
use Livewire\Component;

class TradeHistory extends Component
{
    use TradeStatus;
    
    public function render()
    {
        
        // $client = new CoinGeckoClient();

        // $currencies = $result = $client->coins()->getMarkets('usd');
                
        return view('livewire.user.trade-history');
    }
}