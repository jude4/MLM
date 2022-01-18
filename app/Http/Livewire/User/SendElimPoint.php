<?php

namespace App\Http\Livewire\User;

use App\Models\TransferBasedOnElimPoint;
use App\Models\User;
use Livewire\Component;

class SendElimPoint extends Component
{
    public $user;
    public $user_id;
    public $transfer_qunatity;
    public $transmission_fee;
    public $balance_after_transfer;

    protected $listeners = ['setUserId'];

    public function setUserId($id)
    {
        $this->user = User::findOrFail($id);
        $this->user_id = $this->user->user_id;
    }

    public function getMaxElim()
    {
        $this->transfer_qunatity = $this->getUserElimPoint( auth()->user()->elim_points);
       
    }

    public function conversionExchangeFee($value)
    {
        return intval(str_replace(',', '', $value));
    }
    public function getUserElimPoint()
    {
        return $this->conversionExchangeFee(auth()->user()->elim_points);
    }


    protected $rules = [
        'user_id' => ['required'],
        'transfer_qunatity' => ['nullable'],
        'transmission_fee' => ['nullable'],
        'balance_after_transfer' => ['nullable'],
    ];

    public function updatedTransferQunatity($value)
    {
        if ($value) {
            $value = $value;
            $this->transmission_fee = 100;
        } else {
            $value = 0;
            $this->transmission_fee = 0;
        }
        
        $this->balance_after_transfer = (int)$this->getUserElimPoint( auth()->user()->elim_points) - ((int)$value + (int) $this->transmission_fee);
    }


    public function transfer()
    {
        $attributes = $this->validate();
        
        $reciever = User::where('user_id', $this->user_id)->first();
        if ($reciever) {
            $attributes['reciever_id'] = $reciever->id;
            $attributes['user_id'] = auth()->id();
            if ($this->transfer_qunatity < auth()->user()->elim_points) {
                TransferBasedOnElimPoint::create($attributes);
                $sender = User::find(auth()->id());
                $sender->elim_points = $this->balance_after_transfer;
                $sender->save();

                return redirect()->route('user.mypointsend')->with('toast_success', 'Transfer Successful!');
            } else {
                return redirect()->route('user.mypointsend')->with('toast_error', 'Error: Insufficient Pv point');
            }
        } else {
            return $this->addError("user_id", "User ID dosn't exist");
        }
    }

    public function render()
    {
        return view('livewire.user.send-elim-point');
    }
}