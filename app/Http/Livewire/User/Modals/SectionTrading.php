<?php

namespace App\Http\Livewire\User\Modals;

use App\Traits\Toggleable;
use Livewire\Component;

class SectionTrading extends Component
{

    use Toggleable;

    public $starting_price = 0; 
    public $amount_by_segment = 0;
    public $percentage_yield = 0;
    public $first_selling_price = 0;
    public $second_selling_price = 0;
    public $third_selling_price = 0;
    public $fourth_selling_price = 0;
    public $fifth_selling_price = 0;
    public $sixth_selling_price = 0;
    public $percentage = 0;
    public $number_of_segments =3;

    public function mount()
    {
            
    }

    

    public function updatedNumberOfSegments($value)
    {
        // $this->calculateSellingPrices();
    }

    public function calculateSellingPrices()
    {
        $value = $this->number_of_segments;
        if ($value >= 1) {
            $this->first_selling_price = (int) ($this->starting_price + $this->starting_price*$this->percentage);
        }

        if ($value >= 2) {
            $this->second_selling_price = (int) ($this->first_selling_price + $this->first_selling_price*$this->percentage);
        }

        if ($value >= 3) {
            $this->third_selling_price = (int) ($this->second_selling_price + $this->second_selling_price*$this->percentage);
        }

        if ($value >= 4) {
            $this->fourth_selling_price = (int) ($this->third_selling_price + $this->third_selling_price*$this->percentage);
        }

        if ($value >= 5) {
            $this->fifth_selling_price = (int) ($this->fourth_selling_price + $this->fourth_selling_price*$this->percentage);
        }

        if ($value >= 6) {
            $this->sixth_selling_price = (int) ($this->fifth_selling_price + $this->fifth_selling_price*$this->percentage);
        }
    }

    public function updated()
    {
        $this->editMode = true;
        $this->percentage_yield = (float) $this->percentage_yield;
        $this->percentage = $this->percentage_yield*(1/100);
        $this->starting_price = (int) $this->starting_price;
        $this->amount_by_segment = (int) $this->amount_by_segment;        
        $this->calculateSellingPrices();
    }

    public function render()
    {
        return view('livewire.user.modals.section-trading');
    }
}
