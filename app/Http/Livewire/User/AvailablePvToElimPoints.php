<?php

namespace App\Http\Livewire\User;

use App\Models\PvConversionApplication;
use Livewire\Component;

class AvailablePvToElimPoints extends Component
{
    public  $amount, $quantity_after_conversion, $fee = 100, $balance_after_conversion;

    protected $rules = [
        'amount' => ['required', 'numeric'],
    ];

    public function updatedAmount()
    {
        $this->validate();
        $this->quantity_after_conversion = (int) $this->amount - $this->fee;
        $this->balance_after_conversion = auth()->user()->available_pv - $this->amount;
    }

    public function apply()
    {
        $attributes = $this->validate();
        if($this->balance_after_conversion < 0){
            return redirect()->route('user.pvexchangeavailableelimpoint')->with('toast_error', 'Insufficient Funds');
        }
        $application  = PvConversionApplication::create([
            'user_id' => auth()->id(),
            'type' => 'available',
            'status' => 0,
            'amount' => $this->amount,
            'fee' => $this->fee,
            'quantity_after_conversion' => $this->quantity_after_conversion
        ]);

        return $application? 
        redirect()
        ->route('user.pvexchangeavailableelimpoint')
        ->with('toast_success', 'Conversion is successful and will reflect when approved by the Administrator')
        :redirect()
        ->route('user.pvexchangeavailableelimpoint')
        ->with('toast_error', 'Unsuccessful!');
    }

    public function render()
    {
        return view('livewire.user.available-pv-to-elim-points');
    }
}
