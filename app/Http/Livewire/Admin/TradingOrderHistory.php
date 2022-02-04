<?php

namespace App\Http\Livewire\Admin;

use App\Models\PursueTrade;
use App\Models\SectionTrade;
use Livewire\Component;

class TradingOrderHistory extends Component
{
    public $search = '';
    public $foo, $page = 1;
    public $date;

    protected $queryString = [
        'foo',
        'search' => ['except' => ''],
        'date' => ['except' => ''],
        'page' => ['except' => 1],
    ];
    
    public function pauseTrade($id, $type)
    {
        dump($type);
    }

    public function render()
    {
        $sectionTrade = SectionTrade::with('user')
            ->whereHas('user', function ($query) {
                $query->where('nickname', 'like', '%' . $this->search . '%')
                    ->orWhere('user_id', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->where(function ($query) {
                $query->where('created_at', 'like', '%' . $this->date . '%');
            })
            ->latest()->get();
        $pursueTrade = PursueTrade::with('user')
            ->whereHas('user', function ($query) {
                $query->where('nickname', 'like', '%' . $this->search . '%')
                    ->orWhere('user_id', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->where(function ($query) {
                $query->where('created_at', 'like', '%' . $this->date . '%');
            })
            ->latest()->get();

        $histories = $sectionTrade->concat($pursueTrade);
        $historycount = count($histories);

        return view('livewire.admin.trading-order-history', compact('histories', 'historycount'));
    }
}