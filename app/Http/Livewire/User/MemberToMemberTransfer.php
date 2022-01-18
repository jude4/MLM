<?php

namespace App\Http\Livewire\User;

use App\Models\PvTransmissionApplication;
use App\Models\User;
use Livewire\Component;

class MemberToMemberTransfer extends Component
{
    public $user;
    public $userId;
    public $balance_after_exchange;
    public $exchange_quantity;
    public $conversion_quantity;
    public $exchange_fee ;
    

    protected $listeners = ['setUserId'];

    public function setUserId($id)
    {
        $this->user = User::findOrFail($id);
        $this->userId = $this->user->user_id;
        
    }

    public function getMaxPv()
    {
        $this->exchange_quantity = auth()->user()->available_pv;
    }

    public function updatedExchangeQuantity($value)
    {
        if ($value) {
            $value = $value;
            $this->exchange_fee = 100;
        } else {
            $value = 0;
            $this->exchange_fee = 0;
        }
        $this->balance_after_exchange = (int) auth()->user()->available_pv - ((int)$value + (int) $this->exchange_fee);
    }

    protected $rules = [
        'userId' => ['required'],
    ];

    public function transfer()
    {
        $this->validate();
        $reciever = User::where('user_id',$this->userId)->first();
        if ($reciever) {
            if ($this->exchange_quantity < auth()->user()->available_pv) {
                PvTransmissionApplication::create([
                    'user_id' => auth()->id(),
                    'amount' => $this->exchange_quantity,
                    'incoming_id' => $reciever->id,
                    'receiving_nickname' => $reciever->nickname,
                    'balance_after_transfer' => auth()->user()->pavailable_pv,
                    'fee' => $this->exchange_fee,
                ]);
                
                $sender = User::find(auth()->id());
                $sender->available_pv = $this->balance_after_exchange;
                $sender->save();
                                
                return redirect()->route('user.pvtransfer')->with('toast_success', 'Transfer Successful!');
                
            } else {
                return redirect()->route('user.pvtransfer')->with('toast_error', 'Error: Insufficient Pv point');
 
            }
        } else {
            return $this->addError("userId", "User ID dosn't exist");
        }

    }
    
    public function render()
    {
        return view('livewire.user.member-to-member-transfer');
    }
}