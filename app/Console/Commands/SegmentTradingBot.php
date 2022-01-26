<?php

namespace App\Console\Commands;

use App\Models\Trade;
use Illuminate\Console\Command;

class SegmentTradingBot extends Command
{
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
    protected $description = 'Command description';

    const UNGOING = 0;
    const PAUSE = 1;
    const COMPLETED = 2;

    public $default_api_key;
    public $default_secret_key;

    public $quantity = 1;

    public function __construct()
    {
        parent::__construct();
        $this->default_api_key = config('app.api_key');
        $this->default_secret_key = config('app.secret_key');
    }


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $trades = Trade::with('user')->where('state', self::UNGOING)->get();

        if ($trades) {
            foreach ($trades as $trade) {
                $apiKey = !empty($trade->user->upbit_access_key)
                    ? $trade->user->upbit_access_key
                    : $this->default_api_key;
                $secretKey = !empty($trade->user->upbit_secret_key)
                    ? $trade->user->upbit_secret_key
                    : $this->default_secret_key;

                $api = new \Binance\API($apiKey, $secretKey);

                $currentPrice = $api->bookPrices()[$trade->currency];

                // $buyingPrice = $api->bookPrices()[$trade->currency];

                $price = $trade->amount_by_segment;

                $startingPrice = $trade->start_price;

                $firstSellingPrice = $trade->first_selling_price;

                $secondSellingPrice = $trade->second_selling_price;

                $thirdSellingPrice = $trade->third_selling_price;

                $fourthSelingPrice = $trade->fourth_selling_price;

                $fifthSellingPrice = $trade->fifth_selling_price;

                $sixthSellingPrice = $trade->sixth_selling_price;

                /**
                 * Sell if the starting price is equal to the bookPrice
                 */

                if ($startingPrice == $currentPrice) {

                    $api->buy($trade->currency, $this->quantity, $price);
                    
                } elseif ($firstSellingPrice == $currentPrice) {

                    if ($trade->number_of_segments == 1) {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $trade->state = self::COMPLETED;

                        $trade->save();
                    } else {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $api->buy($trade->currency, $this->quantity, $price);
                    }
                } elseif ($secondSellingPrice == $currentPrice) {

                    if ($trade->number_of_segments == 2) {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $trade->state = self::COMPLETED;

                        $trade->save();
                    } else {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $api->buy($trade->currency, $this->quantity, $price);
                    }
                } elseif ($thirdSellingPrice == $currentPrice) {

                    if ($trade->number_of_segments == 3) {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $trade->state = self::COMPLETED;

                        $trade->save();
                    } else {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $api->buy($trade->currency, $this->quantity, $price);
                    };
                } elseif ($fourthSelingPrice == $currentPrice) {

                    if ($trade->number_of_segments == 4) {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $trade->state = self::COMPLETED;

                        $trade->save();
                    } else {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $api->buy($trade->currency, $this->quantity, $price);
                    }
                } elseif ($fifthSellingPrice == $currentPrice) {

                    if ($trade->number_of_segments == 5) {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $trade->state = self::COMPLETED;

                        $trade->save();
                    } else {

                        $api->sell($trade->currency, $this->quantity, $price);

                        $api->buy($trade->currency, $this->quantity, $price);
                    }
                } elseif ($sixthSellingPrice == $currentPrice) {

                    $api->buy($trade->currency, $this->quantity);

                    $trade->state = self::COMPLETED;

                    $trade->save();
                }
            }
        }
    }
}