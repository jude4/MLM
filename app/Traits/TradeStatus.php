<?php

namespace App\Traits;


trait TradeStatus
{
    public $processing = 0;
    public $paused = 1;
    public $completed = 2;
    public $quantity = 1;
    public $default_api_key;
    public $default_secret_key;

    public function __construct()
    {
        $this->default_api_key = config('app.api_key');
        $this->default_secret_key = config('app.secret_key');
    }

    public function buy($api, $currency, $quantity, $amount, $trade)
    {
        $api->buy($currency, $quantity, $amount);

        $trade->segment_bought++;

        $trade->save();
    }

    public function sell($api, $currency, $quantity, $amount, $trade)
    {
        $api->sell($currency, $quantity, $amount);

        $trade->segment_sold++;

        $trade->state = $this->completed;

        $trade->save();
    }
}