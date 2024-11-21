<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Swalt extends Component
{
    public function swAlert($message)
    {
        return $this->dispatch(
            'swal',
            [
                'title' => 'Great!',
                'message' => $message,
                'icon' => 'success'
            ]
        );
    }
}

// <?php

// namespace App\Livewire\Forms;

// use Livewire\Attributes\Validate;
// use Livewire\Form;

// class TaskForm extends Form
// {
//     #[Validate('required|min:5|max:50')]
//     public $title;

//     #[Validate('required|min:5|max:50|')]
//     public $slug;

//     #[Validate('max:100', as: 'Post Description')]
//     public $description;

//     #[Validate('required')]
//     public $status;

//     #[Validate('required')]
//     public $priority;

//     #[Validate('required')]
//     public $deadline;

//     public function save()
//     {
//         $this->validate();

//         auth()->user()->tasks()->create($this->pull());

//         // request()->session()->flash('save-success', 'post was created successfully');
        
//     }
// }