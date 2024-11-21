<?php

namespace App\Livewire\Admin\Inc;

use App\Models\Settings;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class SettingLogodark extends Component
{
    use WithFileUploads;
    // public Swalt $swal;
    #[Validate('required | image')]
    public $logo;

    public $logo_dark;

    public $media;

    public function mount()
    {
        $this->media = Settings::find(1);
        $this->logo_dark = $this->media->logo_dark;
    }

    public function updateLogo()
    {
        $this->validate();
        $name = $this->logo->getClientOriginalName();
        $this->logo_dark = $this->logo->storeAs('logos', $name, 'public');

        $this->media->update($this->only([
            'logo_dark',
        ]));
        // $this->reset();
        $this->dispatch(
            'swal',
            [
                'title' => 'Great!',
                'message' => 'Site settings updated successfull!',
                'icon' => 'success'
            ]
        );
    }

    public function render()
    {
        return view('admin.inc.setting-logodark');
    }
}