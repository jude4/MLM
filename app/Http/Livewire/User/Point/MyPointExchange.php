<?php

namespace App\Http\Livewire\User\Point;

use App\Models\ElimPointTransferHistory;
use App\Models\User;
use Livewire\Component;

class MyPointExchange extends Component
{
    public $exchange_quantity, $exchange_fee, $conversion_quantity, $balance_after_exchange;

    protected $rules = [
        'exchange_quantity' => ['required'],
        'exchange_fee' => ['required'],
        'conversion_quantity' => ['required'],
        'balance_after_exchange' => ['required'],
    ];

    public function transferPoint()
    {
        $attributes = $this->validate();

        $userElimPoint = $this->getUserElimPoint();
        $exchangeFee = $attributes['exchange_fee'];


        if ($userElimPoint > $exchangeFee) {

            $this->updateUserElimPoint($attributes['exchange_fee']);

            $attributes['user_id'] = auth()->id();

            ElimPointTransferHistory::create($attributes);

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
        $user->elim_points = $this->getUserElimPoint($user->elim_points) - $exchangeFee;
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