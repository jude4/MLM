<?php

namespace App\Http\Livewire\Admin;

use App\Models\PvWithDrawalRequestHistory;
use Livewire\Component;

class WithdrawalRequestHistory extends Component
{
    public $count = 0;
    public $search = '';
    public $page = 1;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];    
    
    public function render()
    {
        $histories = PvWithDrawalRequestHistory::with('user')
                                ->search($this->search)
                                ->latest()
                                ->get();
        
        return view('livewire.admin.withdrawal-request-history', compact('histories'));
    }
}