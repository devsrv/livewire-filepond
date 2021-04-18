<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProfile extends Component
{
    use WithFileUploads;

    public $image;

    public $images = [];

    public function updateProfile(): void
    {
        // $this->validate([
        //     'image' => ['required', 'image', 'max:10000'],
        // ]);

        $post = \App\Models\Post::create(['title' => 'test']);

        // SINGLE FILE
        // $post->addMedia($this->image->getRealPath())->toMediaCollection('image');

        // MULTIPLE FILES
        collect($this->images)->each(fn($image) =>
            $post->addMedia($image->getRealPath())->toMediaCollection('images')
        );

        session()->flash('notify', 'Form saved !');
    }

    public function render()
    {
        return view('livewire.update-profile');
    }
}
