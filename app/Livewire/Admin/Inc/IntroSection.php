<?php

namespace App\Livewire\Admin\Inc;

use App\Models\SectionTexts;
use Livewire\Attributes\Validate;
use Livewire\Component;

class IntroSection extends Component
{
    #[Validate('required')]
    public $edit;
    #[Validate('required')]
    public $section_title;
    #[Validate('required')]
    public $section_sub_title;
    #[Validate('required')]
    public $slug;
    #[Validate('required')]
    public $description;

    public function mount($id)
    {
        $this->edit = SectionTexts::findOrFail(4);
        $this->section_title = $this->edit->section_title;
        $this->section_sub_title = $this->edit->section_sub_title;
        $this->slug = $this->edit->slug;
        $this->description = $this->edit->description;
    }

    public function updateIntro()
    {
        $this->validate();
        $this->edit->update($this->all());
        $this->dispatch(
            'swal',
            [
                'title' => 'Great!',
                'message' => 'Record Updated Successfully!',
                'icon' => 'success'
            ]
        );
    }
    public function render()
    {
        return view('admin.inc.intro-section');
    }
}