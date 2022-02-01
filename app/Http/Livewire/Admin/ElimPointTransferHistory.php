<?php

namespace App\Http\Livewire\Admin;

use App\Models\ElimPointTransferHistory as ModelsElimPointTransferHistory;
use Livewire\Component;

class ElimPointTransferHistory extends Component
{
    public $count = 0;
    public $search = '';
    public $startDate, $endDate;
    public $searchBy = 'name';
    public $foo, $page = 1;

    protected $queryString = [
        'foo',
        'search' => ['except' => ''],
        'startDate' => ['except' => ''],
        'endDate' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function mount()
    {
        $this->fill(request()->only('search', 'page'));
    }


    public function render()
    {
        $count = $this->count;
       
        $histories = ModelsElimPointTransferHistory::with('user', 'reciever')
            ->search($this->search)
            ->latest()
            ->get();

           
        return view('livewire.admin.elim-point-transfer-history', compact('histories', 'count'));
    }
}