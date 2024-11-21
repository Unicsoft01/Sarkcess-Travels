<?php

namespace App\Livewire\Frontend\Inc;

use App\Models\Applications;
use Livewire\Attributes\Validate;
use Livewire\Component;
// use Livewire\Attributes\Lazy;

// #[Lazy()]
class ApplyNow extends Component
{
    #[Validate('required')]
    public $university_id;
    #[Validate('required | string|min:3|max:30')]
    public $first_name;
    #[Validate('required | string|min:3|max:30')]
    public $last_name;
    #[Validate('required | string|min:3|max:30')]
    public $email;
    #[Validate('required | string|min:3|max:22')]
    public $phone;
    #[Validate('required | string|min:3|max:30')]
    public $qualification;
    #[Validate('required | string|min:3|max:30')]
    public $country;
    #[Validate('required | string|min:3|max:30')]
    public $state;
    #[Validate('required')]
    public $budget;

    public function mount($id)
    {
        $this->university_id = $id;
    }

    public function create()
    {
        $this->validate();
        Applications::create($this->pull());
        $this->dispatch(
            'swal',
            [
                'title' => 'Great!',
                'message' => 'Your application has been recieved successfully. You should get a response via Email shortly!',
                'icon' => 'success'
            ]
        );
    }

    public function render()
    {
        return view('frontend.inc.apply-now');
    }

    // public function placeholder(array $params = [])
    // {
    //     return view('frontend.placeholders.how-to-study-placeholder', $params);
    // }
}