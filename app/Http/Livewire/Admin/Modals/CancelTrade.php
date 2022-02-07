<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\PursueTrade;
use App\Models\SectionTrade;
use App\Traits\Toggleable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class CancelTrade extends Component
{
    use Toggleable;
    protected $listeners = [
        'endSectionTrade',
        'endPursueTrade',
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
    public function endSectionTrade($id)
    {
        $this->editMode = true;
        $this->sectionTrade = SectionTrade::find($id);
        $this->sectionType = true;
    }
    public function endPursueTrade($id)
    {
        $this->editMode = true;
        $this->sectionTrade = PursueTrade::find($id);
    }


    public function endTrade()
    {
        $this->validate();

        if (Hash::check($this->password, Auth::guard('admin')->user()->password)) {

            if (!isEmpty($this->sectionType)) {
                $this->sectionTrade->state = 2;
                $this->sectionTrade->save();
            } else {

                $this->pursueTrade->state = 2;
                $this->pursueTrade->save();
            }

            return redirect()->route('admin.tradingorderhistory')->with('toast_success', 'Trading Ended Successfully!');
        }
    }

    public function render()
    {
        return view('livewire.admin.modals.cancel-trade');
    }
}