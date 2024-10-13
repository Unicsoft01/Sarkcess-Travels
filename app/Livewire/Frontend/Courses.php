<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Courses extends Component
{
    #[Layout('layouts.frontend')] 

    public function render()
    {
        return view('frontend.courses');
    }
}