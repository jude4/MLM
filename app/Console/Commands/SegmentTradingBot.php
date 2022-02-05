<?php

namespace App\Console\Commands;

use App\Models\Ranking;
use App\Models\SectionTrade;
use App\Models\TradingSetting;
use App\Traits\TradeStatus;
use Illuminate\Console\Command;

class SegmentTradingBot extends Command
{
    use TradeStatus;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'segment-trading:bot';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Buy and sell cryptocurrency at a certain price';


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
        $trades = SectionTrade::with('user')->where('state', $this->processing)->get();

        if ($trades->isNotEmpty()) {
            foreach ($trades as $trade) {
                $apiKey = !empty($trade->user->upbit_access_key)
                    ? $trade->user->upbit_access_key
                    : $this->default_api_key;
                $secretKey = !empty($trade->user->upbit_secret_key)
                    ? $trade->user->upbit_secret_key
                    : $this->default_secret_key;

                $api = new \Binance\API($apiKey, $secretKey);
                $ticker = $api->prices();
                $currentBuyingPrice = $api->bookPrices()[$trade->currency]['bid'];
                $currentSellingPrice = $api->bookPrices()[$trade->currency]['ask'];

                $price = $trade->amount_by_segment;

                $startingPrice = $trade->start_price;

                $firstSellingPrice = $trade->first_selling_price;

                $secondSellingPrice = $trade->second_selling_price;

                $thirdSellingPrice = $trade->third_selling_price;

                $fourthSelingPrice = $trade->fourth_selling_price;

                $fifthSellingPrice = $trade->fifth_selling_price;

                $sixthSellingPrice = $trade->sixth_selling_price;

                if ($startingPrice == $currentBuyingPrice) {

                    $api->buy($trade->currency, $this->quantity, $price);
                    $tradingSettings = TradingSetting::first();
                    $trade->user->tPointDetails()->create([
                        'increase' => false,
                        'qunatity' => $tradingSettings->section_transaction_fee,
                        'contents' => 'buy elim  bot',
                    ]);

                    $trade->user->t_points = $trade->user->t_points - $tradingSettings->section_transaction_fee;
                    $trade->user->save();
                    
                } elseif ($firstSellingPrice == $currentBuyingPrice && $trade->segment_sold == 0) {

                    if ($trade->number_of_segments == 1) {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $trade->state = $this->completed;

                        $trade->save();

                        Ranking::create([
                            'user_id' => $trade->user_id,
                            'reward' => $trade->percentage_yield,
                            'yield' => $api->balances($ticker)[$trade->currency],
                        ]);

                        continue;
                    } else {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $api->buy($trade->currency, $this->quantity, $price);
                    }

                    $trade->segment_sold++;

                    $trade->save();
                } elseif ($secondSellingPrice == $currentBuyingPrice && $trade->segment_sold == 1) {

                    if ($trade->number_of_segments == 2) {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $trade->state = $this->completed;

                        $trade->save();

                        Ranking::create([
                            'user_id' => $trade->user_id,
                            'reward' => $trade->percentage_yield,
                            'yield' => $api->balances($ticker)[$trade->currency],
                        ]);

                        continue;
                    } else {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $api->buy($trade->currency, $this->quantity, $price);
                    }

                    $trade->segment_sold++;

                    $trade->save();
                } elseif ($thirdSellingPrice == $currentBuyingPrice && $trade->segment_sold == 2) {

                    if ($trade->number_of_segments == 3) {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $trade->state = $this->completed;

                        $trade->save();

                        Ranking::create([
                            'user_id' => $trade->user_id,
                            'reward' => $trade->percentage_yield,
                            'yield' => $api->balances($ticker)[$trade->currency],
                        ]);

                        continue;
                    } else {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $api->buy($trade->currency, $this->quantity, $price);
                    }

                    $trade->segment_sold++;

                    $trade->save();
                } elseif ($fourthSelingPrice == $currentBuyingPrice && $trade->segment_sold == 3) {

                    if ($trade->number_of_segments == 4) {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $trade->state = $this->completed;

                        $trade->save();

                        Ranking::create([
                            'user_id' => $trade->user_id,
                            'reward' => $trade->percentage_yield,
                            'yield' => $api->balances($ticker)[$trade->currency],
                        ]);

                        continue;
                    } else {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $api->buy($trade->currency, $this->quantity, $price);
                    }

                    $trade->segment_sold++;

                    $trade->save();
                } elseif ($fifthSellingPrice == $currentBuyingPrice && $trade->segment_sold == 4) {

                    if ($trade->number_of_segments == 5) {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $trade->state = $this->completed;

                        $trade->save();
                        Ranking::create([
                            'user_id' => $trade->user_id,
                            'reward' => $trade->percentage_yield,
                            'yield' => $api->balances($ticker)[$trade->currency],
                        ]);
                        continue;
                    } else {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $api->buy($trade->currency, $this->quantity, $price);
                    }

                    $trade->segment_sold++;

                    $trade->save();
                } elseif ($sixthSellingPrice == $currentBuyingPrice && $trade->segment_sold == 5) {

                    $api->buy($trade->currency, $this->quantity, $price);

                    $trade->state = $this->completed;

                    $trade->save();
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