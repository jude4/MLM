<?php

namespace App\Http\Livewire\Admin;

use App\Models\PvConversionApplication;
use Livewire\Component;

class PvConversionApplicationDetails extends Component
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
        $historycount = PvConversionApplication::count();
        return view('livewire.admin.pv-conversion-application-details', compact('historycount'));
    }
}
