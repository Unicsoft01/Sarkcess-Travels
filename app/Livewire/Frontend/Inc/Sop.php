<?php

namespace App\Livewire\Frontend\Inc;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Sop extends Component
{
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.inc.sop');
    }
}