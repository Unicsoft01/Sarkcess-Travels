<?php

namespace App\Livewire\Admin\Inc;

use Livewire\Attributes\Validate;
use Livewire\Attributes\Lazy;
use App\Models\SectionTexts;
use Livewire\Component;

#[Lazy]
class SliderOne extends Component
{
    #[Validate('required')]
    public $id;
    #[Validate('required')]
    public $edit;
    #[Validate('required')]
    public $section_title;
    // #[Validate('required')]
    public $section_sub_title;
    #[Validate('required')]
    public $description;

    public function mount($id)
    {
        $this->id = $id;
        $this->edit = SectionTexts::findOrFail($id);
        $this->section_title = $this->edit->section_title;
        $this->section_sub_title = $this->edit->section_sub_title;
        $this->description = $this->edit->description;
    }

    public function updateSlider($id)
    {
        // $this->id = $id;
        $this->validate();
        $this->edit = SectionTexts::findOrFail($id);
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
        return view('admin.inc.slider-one');
    }
}