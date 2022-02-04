<?php

namespace App\Http\Livewire\User\Modals;

use App\Models\PursueTrade;
use App\Models\TradingSetting;
use App\Traits\Toggleable;
use Livewire\Component;

class PursueTrading extends Component
{

    use Toggleable;

    public $opertaional_capital = 0;
    public $percentage_yield = 0;
    // Purchase amounts
    public $first_purchase_amount = 0;
    public $second_purchase_amount = 0;
    public $third_purchase_amount = 0;
    public $fourth_purchase_amount = 0;
    // Purchase prices
    public $first_purchase_price = 0;
    public $second_purchase_price = 0;
    public $third_purchase_price = 0;
    public $fourth_purchase_price = 0;
    // Average purchase prices
    public $first_av_purchase_price = 0;
    public $second_av_purchase_price = 0;
    public $third_av_purchase_price = 0;
    public $fourth_av_purchase_price = 0;
    // Selling prices
    public $first_selling_price = 0;
    public $second_selling_price = 0;
    public $third_selling_price = 0;
    public $fourth_selling_price = 0;
    // 
    public $percentage = 0;
    public $currency = 'BTC';
    public $subject = 'Pursue Trading';
    public $symbol;
    public $price = 73586000;
    public $pricePercentage = -300;
    public $volume = 65866;

    protected $listeners = ['setPursueCurrency'];

    public function setPursueCurrency($value, $price, $pricePercentage, $volume)
    {
        $this->symbol = $value;
        $this->currency = $value;
        $this->price = (float) $price;
        $this->pricePercentage = (float) $pricePercentage;
        $this->volumn = (float) $volume;
        $this->editMode = true;
    }

    protected $rules = [
        'opertaional_capital' => ['required', 'numeric'],
        // 'amount_by_segment' => ['nullable', 'numeric'],
        'percentage_yield' => ['nullable', 'numeric'],

        'first_purchase_amount' => ['nullable', 'numeric'],
        'second_purchase_amount' => ['nullable', 'numeric'],
        'third_purchase_amount' => ['nullable', 'numeric'],
        'fourth_purchase_amount' => ['nullable', 'numeric'],

        'first_purchase_price' => ['nullable', 'numeric'],
        'second_purchase_price' => ['nullable', 'numeric'],
        'third_purchase_price' => ['nullable', 'numeric'],
        'fourth_purchase_price' => ['nullable', 'numeric'],

        'first_av_purchase_price' => ['nullable', 'numeric'],
        'second_av_purchase_price' => ['nullable', 'numeric'],
        'third_av_purchase_price' => ['nullable', 'numeric'],
        'fourth_av_purchase_price' => ['nullable', 'numeric'],

        'first_selling_price' => ['nullable', 'numeric'],
        'second_selling_price' => ['nullable', 'numeric'],
        'third_selling_price' => ['nullable', 'numeric'],
        'fourth_selling_price' => ['nullable', 'numeric'],

        'currency' => ['required', 'string'],
        'subject' => ['required', 'string'],
    ];

    public function updated()
    {
        $this->editMode = true;

        //calculating percentage yield
        $this->percentage_yield = (float) $this->percentage_yield;
        $this->percentage = $this->percentage_yield * (1 / 100);

        $this->first_av_purchase_price = $this->first_purchase_price;
        $this->second_av_purchase_price = ((int) $this->first_purchase_price + (int) $this->second_purchase_price) / 2;
        $this->third_av_purchase_price = ((int) $this->first_purchase_price +
            (int) $this->second_purchase_price +
            (int) $this->third_purchase_price) / 3;
        $this->fourth_av_purchase_price = ((int) $this->first_purchase_price +
            (int) $this->second_purchase_price +
            (int) $this->third_purchase_price +
            (int) $this->fourth_purchase_price) / 3;

        $this->first_selling_price = $this->first_av_purchase_price + $this->first_av_purchase_price * $this->percentage;
        $this->second_selling_price = $this->second_av_purchase_price + $this->second_av_purchase_price * $this->percentage;
        $this->third_selling_price = $this->third_av_purchase_price + $this->third_av_purchase_price * $this->percentage;
        $this->fourth_selling_price = $this->fourth_av_purchase_price + $this->fourth_av_purchase_price * $this->percentage;
    }

    public function calculateValues()
    {
    }

    public function placeOrder()
    {
        $user = auth()->user();

        $tradingSettings = TradingSetting::first();
        if ($user->t_points < $tradingSettings->pursuit_transaction_fee) {
            return redirect()->route('user.trading')->with('toast_error', 'You do not have enough T Points to trade');
        }
        if (!$user->hasApiKeys()) {
            return redirect()->route('user.profile')->with('toast_error', 'You cannot trade unless you add your access and secret keys from upbit');
        }


        $user->tPointDetails()->create([
            'increase' => false,
            'quantity' => $tradingSettings->pursuit_transaction_fee,
            'contents' => 'buy elim bot'
        ]);

        $user->t_points = $user->t_points - $tradingSettings->pursuit_transaction_fee;
        $user->save();

        $attributes = $this->validate();
        $attributes['user_id'] = auth()->id();
        PursueTrade::create($attributes);

        return redirect()->route('user.trading')->with('toast_success', 'Successful!');
    }

    public function render()
    {
        return view('livewire.user.modals.pursue-trading');
    }
}
