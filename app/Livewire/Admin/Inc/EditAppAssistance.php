<?php

namespace App\Livewire\Admin\Inc;

use App\Models\AdmissionAssistance;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Reactive;

class EditAppAssistance extends Component
{
    #[Validate('required')]
    public $id;
    #[Validate('required')]
    public $edit;
    #[Validate('required')]
    public $short_name;
    #[Validate('required')]
    public $fullname;
    
    public $slug;

    public function mount($id)
    {
        $this->id = $id;
        $this->edit = AdmissionAssistance::findOrFail($id);
        $this->short_name = $this->edit->short_name;
        $this->fullname = $this->edit->fullname;
        $this->slug = $this->edit->slug;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->fullname);
    }

    public function render()
    {
        return view('admin.inc.edit-app-assistance');
    }

    public function updateAssistance()
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
        // $this->redirectRoute('admin.homepage');
    }
}