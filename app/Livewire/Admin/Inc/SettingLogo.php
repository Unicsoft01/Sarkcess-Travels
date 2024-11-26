<?php

namespace App\Livewire\Admin\Inc;

use App\Models\Settings;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

// use App\livewire\Admin\Swalt;

class SettingLogo extends Component
{
    use WithFileUploads;
    // public Swalt $swal;
    #[Validate('required | image')]
    public $logo;

    public $logo_light;

    public $media;

    public function mount()
    {
        $this->media = Settings::find(1);

        $this->logo_light = $this->media->logo_light;
    }

    public function updateLogo()
    {
        $this->validate();
        $name = $this->logo->getClientOriginalName();
        $this->logo_light = $this->logo->storeAs('logos', $name, 'public');

        $this->media->update($this->only([
            'logo_light',
        ]));
        // $this->reset();
        $this->dispatch(
            'swal',
            [
                'title' => 'Great!',
                'message' => 'Site Logo updated successfull!',
                'icon' => 'success'
            ]
        );
    }

    public function render()
    {
        return view('admin.inc.setting-logo');
    }
}