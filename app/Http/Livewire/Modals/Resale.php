<?php

namespace App\Http\Livewire\Modals;

use App\Models\User;
use App\Traits\Toggleable;
use Livewire\Component;

class Resale extends Component
{
    use Toggleable;

    public $user_id;
    public $reseller;

    protected $listeners = [
        'prepareForResale'
    ];

    public function prepareForResale($id)
    {
        $this->user_id = $id;
        $this->reseller = User::findOrFail($id);
        $this->editMode = true;
    }

    public function mount()
    {
        $this->reseller = User::first();
    }

    public function resale()
    {
        $user = User::findOrFail($this->user_id);
        if ($user->resale()) {
            return redirect()->route('user.pvmytree')->with('toast_success', 'Resale Performed Successfully');
        }
        return redirect()->route('user.pvmytree')->with('toast_error', 'Unable to Resale');
    }

    public function render()
    {
        return view('livewire.modals.resale');
    }
}
