<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class ApplyFreeAdvice extends Component
{

    #[Layout('layouts.applylayout')]
    public function render()
    {
        return view('frontend.apply-free-advice');
    }
}