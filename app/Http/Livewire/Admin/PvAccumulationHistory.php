<?php

namespace App\Http\Livewire\Admin;

use App\Models\PvAccumulationHistory as ModelsPvAccumulationHistory;
use Livewire\Component;

class PvAccumulationHistory extends Component
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
        $historycount = ModelsPvAccumulationHistory::count();
        return view('livewire.admin.pv-accumulation-history', compact('historycount'));
    }
}