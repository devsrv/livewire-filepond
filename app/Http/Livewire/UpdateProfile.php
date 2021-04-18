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
        $this->validate([
            'image' => ['required', 'image', 'max:10000'],
        ]);

        $post = \App\Models\Post::create(['title' => 'test']);

        $post->addMedia($this->image->getRealPath())->toMediaCollection('image');

        session()->flash('notify', 'Form saved !');
    }

    public function render()
    {
        return view('livewire.update-profile');
    }
}
