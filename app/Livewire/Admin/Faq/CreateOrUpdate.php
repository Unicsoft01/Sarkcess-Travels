<?php

namespace App\Livewire\Admin\Faq;

use App\Models\Faq;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateOrUpdate extends Component
{

    #[Validate('required | string|min:3|max:100')]
    public $question;

    #[Validate('required | string|min:3|max:255')]
    public $answer;

    public function create()
    {
        $this->validate();

        Faq::create($this->pull());

        $this->dispatch(
            'swal',
            [
                'title' => 'Great!',
                'message' => 'Questions and Answers saved Successfully!',
                'icon' => 'success'
            ]
        );
    }

    public function render()
    {
        return view('admin.faq.create-or-update');
    }
}