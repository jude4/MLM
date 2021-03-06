<?php

namespace App\Http\Livewire\Admin;

use App\Models\PvTransmissionApplication;
use Livewire\Component;

class PvTransmissionAppicationDetails extends Component
{
    public $count = 0;

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
        $histories = PvTransmissionApplication::with('user', 'reciever')->search($this->search)->latest()->get();
        return view('livewire.admin.pv-transmission-appication-details', compact('histories'));
    }
}