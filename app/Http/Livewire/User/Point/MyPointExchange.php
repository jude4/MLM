<?php

namespace App\Http\Livewire\User\Point;

use App\Models\ElimPointExchangeHistory;
use App\Models\ElimPointTransferHistory;
use App\Models\User;
use Livewire\Component;

class MyPointExchange extends Component
{
    public $exchange_quantity, $exchange_fee = 1, $conversion_quantity = 2, $balance_after_exchange = 0;

    protected $rules = [
        'exchange_quantity' => ['required'],
        'exchange_fee' => ['required'],
        'conversion_quantity' => ['required'],
        'balance_after_exchange' => ['required'],
    ];

    public function updatedExchangeQuantity($value)
    {
        $value = empty($value) ? 0 : $value;
        $this->conversion_quantity = $value * 2;
        $this->balance_after_exchange = empty($value) ? 0 : $this->getUserElimPoint(auth()->user()->elim_points) -  $this->conversion_quantity - $value;
    }

    public function getMaxElimPoint()
    {
        return $this->exchange_quantity = $this->getUserElimPoint(auth()->user()->elim_points);
    }

    public function transferPoint()
    {
        $attributes = $this->validate();

        $userElimPoint = $this->getUserElimPoint();
        $exchangeFee = $attributes['exchange_fee'];


        if ($userElimPoint > $exchangeFee) {

            
            $attributes['user_id'] = auth()->id();
            
            ElimPointExchangeHistory::create([
                'user_id' => auth()->id(),
                'elim_quantity_before_exhange' => $this->getUserElimPoint(),
                'tp_quantity_after_exhange' => $this->conversion_quantity,
                'detail' => 'Send',
                'exchange_fee' => $this->exchange_fee
            ]);
            
 

            return redirect()->route('user.mypointexchange')->with('toast_success', 'Elim point exchange transaction was successful!');
        }

        return redirect()->route('user.mypointexchange')->with('toast_error', 'Elim point exchange transaction failed, due to insufficent elim points.');
    }

    public function conversionExchangeFee($value)
    {
        return intval(str_replace(',', '', $value));
    }
    public function updateUserElimPoint($exchangeFee)
    {
        $user = User::find(auth()->id());
        $user->elim_points = $this->balance_after_exchange;
        $user->save();
    }

    public function getUserElimPoint()
    {
        return $this->conversionExchangeFee(auth()->user()->elim_points);
    }


    public function render()
    {
        return view('livewire.user.point.my-point-exchange');
    }
}