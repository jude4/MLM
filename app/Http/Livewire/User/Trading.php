<?php

namespace App\Http\Livewire\User;

use App\Traits\TradeStatus;
use Livewire\Component;
use GuzzleHttp\Client;

class Trading extends Component
{

    use TradeStatus;

    public function render()
    {

        $api = new \Binance\API($this->default_api_key, $this->default_secret_key);

        $url = $api->base . 'v3/ticker/24hr';

        $client = new Client();

        $request = $client->request('GET', $url);


        $dataBody = json_decode($request->getBody()->getContents());

        $currencies = [];

        $currencies = collect($dataBody);

        return view('livewire.user.trading', compact('currencies'));
    }
}