<?php

namespace App\Livewire\Admin\Inc;

use App\Models\Settings;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\livewire\Admin\Swalt;

class SettingText extends Component
{
    // public Swalt $swal;
    
    #[Validate('required ')]
    public $name;
    #[Validate('required | max:50')]
    public $description;

    public $media;

    public function mount()
    {
        $this->media = Settings::find(1);
        $this->name = $this->media->name;
        $this->description = $this->media->description;
    }

    public function updateSettings()
    {
        $this->validate();
        $this->media->update($this->all());
        $this->dispatch(
            'swal',
            [
                'title' => 'Great!',
                'message' => 'Site settings updated successfull!',
                'icon' => 'success'
            ]);
    }

    public function render()
    {
        return view('admin.inc.setting-text');
    }
}