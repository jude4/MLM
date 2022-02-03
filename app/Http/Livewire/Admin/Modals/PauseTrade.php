<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\PursueTrade;
use App\Models\SectionTrade;
use App\Traits\Toggleable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class PauseTrade extends Component
{
    use Toggleable;

    protected $listeners = [
        'pauseSectionTrade',
        'pausePursueTrade',
    ];

    public $sectionTrade;
    public $pursueTrade;
    public $password;
    public $sectionType = false;

    public function mount()
    {
        $this->sectionTrade = SectionTrade::first();
        $this->pursueTrade = PursueTrade::first();
    }

    protected $rules = [
        'password' => 'required|string'
    ];

    public function pauseSectionTrade($id)
    {
        $this->editMode = true;
        $this->sectionTrade = SectionTrade::find($id);
        $this->sectionType = true;
    }

    public function pausePursueTrade($id)
    {
        $this->editMode = true;
        $this->sectionTrade = PursueTrade::find($id);
    }




    public function pauseSegmentTrade()
    {
        $this->validate();

        if (Hash::check($this->password, Auth::guard('admin')->user()->password)) {
            $this->sectionTrade->state = 1;
            $this->sectionTrade->save();

            return redirect()->route('admin.tradingorderhistory')->with('toast_success', 'Trading Paused Successfully!');
        }
    }

    public function pauseTrade()
    {
        $this->validate();

        if (Hash::check($this->password, Auth::guard('admin')->user()->password)) {
            if (!isEmpty($this->sectionType)) {
                $this->sectionTrade->state = 1;
                $this->sectionTrade->save();
            } else {

                $this->pursueTrade->state = 1;
                $this->pursueTrade->save();
            }

            return redirect()->route('admin.tradingorderhistory')->with('toast_success', 'Trading Paused Successfully!');
        }
    }

   


    public function render()
    {
        return view('livewire.admin.modals.pause-trade');
    }
}