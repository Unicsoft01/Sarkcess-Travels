<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Blog extends Component
{
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.blog');
    }
}