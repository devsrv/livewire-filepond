<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProfile extends Component
{
    use WithFileUploads;

    public $image;

    public function updateProfile(): void
    {
        // Will get hit when the submit button is clicked
    }

    public function render()
    {
        return view('livewire.update-profile');
    }
}
