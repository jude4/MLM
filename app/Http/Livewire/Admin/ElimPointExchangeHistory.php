<?php

namespace App\Http\Livewire\Admin;

use App\Models\ElimPointExchangeHistory as ModelsElimPointExchangeHistory;
use Livewire\Component;

class ElimPointExchangeHistory extends Component
{
    public $search = '';
    public $count = 0;
    public $foo, $page = 1;

    protected $queryString = [
        'foo',
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];


    public function mount()
    {
        $this->fill(request()->only('search', 'page'));
    }
    
    
    public function render()
    {
        $histories = ModelsElimPointExchangeHistory::with('user')->search($this->search)->latest()->get();
        
        return view('livewire.admin.elim-point-exchange-history', compact('histories'));
    }
}