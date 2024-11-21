<?php

namespace App\Livewire\Admin;

use App\Models\MediaHandles;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SocialMediaIndex extends Component
{
    #[Validate('string')]
    public $twitter;
    #[Validate('string')]
    public $facebook;
    #[Validate('string')]
    public $youtube;
    #[Validate('string')]
    public $insta;
    // #[Validate('string')]
    // public $linkedin;
    #[Validate('string')]
    public $gmail;
    public $media;

    public function mount()
    {
        $this->media = MediaHandles::find(1);
        $this->twitter = $this->media->twitter;
        $this->facebook = $this->media->facebook;
        $this->youtube = $this->media->youtube;
        $this->insta = $this->media->insta;
        // $this->linkedin = $this->media->linkedin;
        $this->gmail = $this->media->gmail;
    }

    public function updateMedia()
    {
        $this->validate();
        $this->media->update($this->all());
        $this->dispatch(
            'swal',
            [
                'title' => 'Great!',
                'message' => 'Media Records Updated Successfully!',
                'icon' => 'success'
            ]
        );
        // $this->redirectRoute('admin.homepage');
    }
    public function render()
    {
        return view('admin.social-media-index');
    }
}