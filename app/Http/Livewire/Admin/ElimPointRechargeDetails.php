<?php

namespace App\Http\Livewire\Admin;

use App\Models\ElimPointApplication;
use App\Models\User;
use App\Traits\Toggleable;
use Livewire\Component;

class ElimPointRechargeDetails extends Component
{
    use Toggleable;
    public $count = 0;
    public $pending = 0, $cancellation = 1, $approve = 2;
    public $search = '';
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
        $rechargeLists = ElimPointApplication::with('user')
                        ->search($this->search)    
                        ->latest()
                        ->get();
        return view('livewire.admin.elim-point-recharge-details', compact('rechargeLists'));
    }
}