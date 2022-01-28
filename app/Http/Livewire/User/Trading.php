<?php

namespace App\Http\Livewire\User;

use App\Traits\TradeStatus;
use GuzzleHttp\Client;
use Livewire\Component;

class Trading extends Component
{

    use TradeStatus;
    
    public function render()
    {   
        $api = new \Binance\API($this->default_api_key, $this->default_secret_key);

        $url = $api->base . 'v3/ticker/24hr';

        $client = new Client();

        $request = $client->request('GET', $url);

        $currencies = json_decode($request->getBody(), true);

        // dd($currencies);
         
        return view('livewire.user.trading', compact('currencies'));
    }
}