<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfilePicture extends Component
{
    use WithFileUploads;

    public $profilePicture;


    public function updatedprofilePicture()
    {
        $this->uploadProfilePicture();
    }

    

    public function uploadProfilePicture()
    {
        $validator = Validator::make(
            [
                'Profile Picture' => $this->profilePicture,
            ],
            [
                'Profile Picture' => 'required|image|max:8192'
            ]
        );

        if ($validator->fails()) {
            return redirect()->route('user.profile')->with('toast_error', $validator->messages()->all()[0]);
        }

        if ($validator->passes()) {
            $filename = $this->profilePicture->store('photos');
            Auth::user()->image = $filename;
            Auth::user()->save();
            return redirect()->route('user.profile')->with('toast_success', "Profile Picture Updated!");
        }
    }

    public function initialize()
    {
        Auth::user()->clearProfilePicture();
        return redirect()->route('user.profile')->with('toast_success', "Profile Picture Initialized Successfully!");
    }

    public function render()
    {
        return view('livewire.user.profile-picture');
    }
}
