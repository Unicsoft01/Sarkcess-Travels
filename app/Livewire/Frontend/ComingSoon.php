<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;

#[Lazy()]
class ComingSoon extends Component
{
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.coming-soon');
    }
}