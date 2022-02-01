<?php

namespace App\Http\Livewire\Admin;

use App\Models\PvWithDrawalRequestHistory;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

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
       

        $historycount = PvWithDrawalRequestHistory::count();
        return view('livewire.admin.withdrawal-request-history', compact('historycount'));
    }
}