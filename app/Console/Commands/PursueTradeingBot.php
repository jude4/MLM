<?php

namespace App\Console\Commands;

use App\Models\PursueTrade;
use App\Models\Ranking;
use App\Traits\TradeStatus;
use Illuminate\Console\Command;

class PursueTradeingBot extends Command
{
    use TradeStatus;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pursue-trading:bot';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $pursueTrades = PursueTrade::with('user')->where('status', $this->processing)->get();

        if ($pursueTrades->isNotEmpty()) {
            foreach ($pursueTrades as $trade) {
                $apiKey = !empty($trade->user->upbit_access_key)
                    ? $trade->user->upbit_access_key
                    : $this->default_api_key;
                $secretKey = !empty($trade->user->upbit_secret_key)
                    ? $trade->user->upbit_secret_key
                    : $this->default_secret_key;
                $api = new \Binance\API($apiKey, $secretKey);
                $ticker = $api->prices();

                $currentPrice = $api->bookPrices()[$trade->currency]['available'];

                if ($currentPrice == $trade->first_av_purchase_price && $trade->segment_bought == 0) {

                    $this->buy($api, $trade->currency, $this->quantity, $trade->opertaional_capital, $trade);
                } elseif ($currentPrice == $trade->first_selling_price && $trade->segment_bought == 1) {

                    $this->sell($api, $trade->currency, $this->quantity, $trade->opertaional_capital, $trade);

                    Ranking::create([
                        'user_id' => $trade->user_id,
                        'reward' => $trade->percentage_yield,
                        'yield' => $api->balances($ticker)[$trade->currency],
                    ]);

                    continue;
                } elseif ($currentPrice == $trade->second_av_purchase_price && $trade->segment_bought == 1) {

                    $this->buy($api, $trade->currency, $this->quantity, $trade->opertaional_capital, $trade);
                } elseif ($currentPrice == $trade->second_selling_price && $trade->segment_bought == 0) {

                    $this->sell($api, $trade->currency, $this->quantity, $trade->opertaional_capital, $trade);

                    Ranking::create([
                        'user_id' => $trade->user_id,
                        'reward' => $trade->percentage_yield,
                        'yield' => $api->balances($ticker)[$trade->currency],
                    ]);
                    continue;
                } elseif ($currentPrice == $trade->third_av_purchase_price && $trade->segment_bought == 2) {

                    $this->buy($api, $trade->currency, $this->quantity, $trade->opertaional_capital, $trade);
                } elseif ($currentPrice == $trade->third_selling_price && $trade->segment_bought == 0) {

                    $this->sell($api, $trade->currency, $this->quantity, $trade->opertaional_capital, $trade);
                    Ranking::create([
                        'user_id' => $trade->user_id,
                        'reward' => $trade->percentage_yield,
                        'yield' => $api->balances($ticker)[$trade->currency],
                    ]);
                    continue;
                } elseif ($currentPrice == $trade->fourth_av_purchase_price && $trade->segment_bought == 3) {

                    $this->buy($api, $trade->currency, $this->quantity, $trade->opertaional_capital, $trade);
                } elseif ($currentPrice == $trade->fourth_selling_price && $trade->segment_bought == 0) {

                    $this->sell($api, $trade->currency, $this->quantity, $trade->opertaional_capital, $trade);
                    Ranking::create([
                        'user_id' => $trade->user_id,
                        'reward' => $trade->percentage_yield,
                        'yield' => $api->balances($ticker)[$trade->currency],
                    ]);
                    continue;
                }
            }
        }
    }
}