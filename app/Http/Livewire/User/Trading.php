<?php

namespace App\Http\Livewire\User;

use App\Traits\TradeStatus;
use Livewire\Component;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
class Trading extends Component
{

    use TradeStatus;
    
    public function render()
    {
        $client = new CoinGeckoClient();

        $currencies = $result = $client->coins()->getMarkets('krw');
         
        return view('livewire.user.trading', compact('currencies'));
    }
}