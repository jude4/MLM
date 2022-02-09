<?php

namespace App\Http\Livewire\User;

use App\Models\PursueTrade;
use App\Models\SectionTrade;
use App\Traits\TradeStatus;
use GuzzleHttp\Client;
use Livewire\Component;

class MyTrading extends Component
{
    use TradeStatus;

    public $mergedTrade = [];
    public $transaction = [];

    public function mount()
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
        $api = new \Binance\API($this->default_api_key, $this->default_secret_key);

        $url = $api->base . 'v3/ticker/24hr';

        $client = new Client();

        $request = $client->request('GET', $url);


        $dataBody = json_decode($request->getBody()->getContents());

        $currencies = [];

        $currencies = collect($dataBody);

        $currencies = $currencies->take(10);

        return view('livewire.user.my-trading', compact('currencies'));
    }
}