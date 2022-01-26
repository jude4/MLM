<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Trading extends Component
{
    public $apiKey;
    public $secretKey;

    public function mount()
    {
        $this->apiKey = config('app.api_key');
        $this->secretKey = config('app.secret_key');
    }

    public function render()
    {
        return view('livewire.user.trading');
    }
}