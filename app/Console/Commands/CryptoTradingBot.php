<?php

namespace App\Console\Commands;

use App\Models\Trade;
use Illuminate\Console\Command;

class CryptoTradingBot extends Command
{

    protected $signature = 'trading:bot';


    protected $description = 'A trading bot for trading different type of cryptocurrency';

    /**
     * Trading State
     */
    const UNGOING = 0;
    const PAUSE = 1;
    const COMPLETED = 2;

    public $default_api_key;
    public $default_secret_key;

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

                $bookPrice = $api->bookPrices()[$trade->currency]['ask'];
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

                if ($startingPrice == $bookPrice) {
                    $quantity = $trade->percentage_yield;
                    $order = $api->marketSell($trade->currency, $quantity);
                } elseif ($firstSellingPrice == $bookPrice) {
                    $quantity = $trade->percentage_yield;
                    $order = $api->marketSell($trade->currency, $quantity);
                } elseif ($secondSellingPrice == $bookPrice) {
                    $quantity = $trade->percentage_yield;
                    $order = $api->marketSell($trade->currency, $quantity);
                } elseif ($thirdSellingPrice == $bookPrice) {
                    $quantity = $trade->percentage_yield;
                    $order = $api->marketSell($trade->currency, $quantity);
                } elseif ($fourthSelingPrice == $bookPrice) {
                    $quantity = $trade->percentage_yield;
                    $order = $api->marketSell($trade->currency, $quantity);
                } elseif ($fifthSellingPrice == $bookPrice) {
                    $quantity = $trade->percentage_yield;
                    $order = $api->marketSell($trade->currency, $quantity);
                } elseif ($sixthSellingPrice == $bookPrice) {
                    $quantity = $trade->percentage_yield;
                    $order = $api->marketSell($trade->currency, $quantity);
                    $trade->state = self::COMPLETED;
                    $trade->save();
                }
            }
        }
    }
}