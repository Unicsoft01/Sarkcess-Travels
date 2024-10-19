<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class ContactUs extends Component
{
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.contact-us');
    }
}