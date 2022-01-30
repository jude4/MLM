<?php

namespace App\Http\Livewire\User;

use App\Models\PursueTrade;
use App\Models\SectionTrade;
use App\Traits\TradeStatus;
use GuzzleHttp\Client;
use Illuminate\Http\Resources\MergeValue;
use Livewire\Component;

class TradeHistory extends Component
{
    use TradeStatus;

    public $mergedTrade = [];
    public $transaction = [];


    public function suspendTransaction($id, $model)
    {
        
        // $trade = ($model == 'segment trading') ? SectionTrade::findOrFail($id) : PursueTrade::findOrFail($id); 
        
        dump($model);
    }


    public function mount()
    {
        $segmentTrade = SectionTrade::where('user_id', auth()->id())->distinct()->latest()->get();
        $pursueTrade = PursueTrade::where('user_id', auth()->id())->distinct()->latest()->get();
        $data = collect($segmentTrade->concat($pursueTrade));

        // dd($data);
       
        $this->mergedTrade =  $data->map(function ($item) {
            return array_push($this->transaction, $item);
        });

        // $currency->unique();

        // $coins = ['BNBBTC', 'ETHBTC'];

        // $api = new \Binance\API($this->default_api_key, $this->default_secret_key);
        // // dd($api->price('BNBBTC'));
        // $data = [];

        // foreach($coins as $coin) {
        //     array_push($data, $api->price($coin));
        // }

        // dump($data);

        
    }

    public function render()
    {
        return view('livewire.user.trade-history');
    }
}