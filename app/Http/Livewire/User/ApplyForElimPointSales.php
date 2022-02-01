<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ApplyForElimPointSales extends Component
{

    public $conversion_quantity,
        $conversion_fee = 100,
        $quantity_after_conversion,
        $balance_after_conversion;

    
        


    public function render()
    {
        return view('livewire.user.apply-for-elim-point-sales');
    }
}