<?php

namespace App\Http\Livewire\Admin;

use App\Models\PvUsageHistory as ModelsPvUsageHistory;
use Livewire\Component;

class PvUsageHistory extends Component
{
    
    public $count = 0;
    public $search = '';
    public  $page = 1;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];


    public function mount()
    {
        $this->fill(request()->only('search', 'page'));
    }
    public function render()
    {
        $historycount = ModelsPvUsageHistory::count();
        return view('livewire.admin.pv-usage-history', compact('historycount'));
    }
}
