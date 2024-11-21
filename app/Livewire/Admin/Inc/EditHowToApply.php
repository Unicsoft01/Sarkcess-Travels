<?php

namespace App\Livewire\Admin\Inc;

use App\Models\HowToApply;
use App\Models\SectionTexts;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditHowToApply extends Component
{
    #[Validate('required')]
    public $steps;
    #[Validate('required')]
    public $section_title;
    #[Validate('required')]
    public $section_sub_title;
    #[Validate('required')]
    public $step1;
    #[Validate('required')]
    public $description1;
    #[Validate('required')]
    public $step2;
    #[Validate('required')]
    public $description2;
    #[Validate('required')]
    public $step3;
    #[Validate('required')]
    public $description3;

    public $section;

    public function mount()
    {
        $this->steps = HowToApply::find(1);
        $this->section = SectionTexts::find($this->steps->section_id);
        $this->section_title = $this->steps->section->section_title;
        $this->section_sub_title = $this->steps->section->section_sub_title;
        
        $this->step1 = $this->steps->step1;
        $this->description1 = $this->steps->description1;
        $this->step2 = $this->steps->step2;
        $this->description2 = $this->steps->description2;
        $this->step3 = $this->steps->step3;
        $this->description3 = $this->steps->description3;
    }

    public function updateHowToApply()
    {
        $this->validate();
        // dd($this->all());
        $this->section->update($this->all());
        $this->steps->update($this->all());
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
        return view('admin.inc.edit-how-to-apply');
    }
}