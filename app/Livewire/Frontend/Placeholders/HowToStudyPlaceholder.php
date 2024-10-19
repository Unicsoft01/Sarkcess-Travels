<?php

namespace App\Livewire\Frontend\Placeholders;

use Livewire\Attributes\Layout;
use Livewire\Component;

class HowToStudyPlaceholder extends Component
{
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.placeholders.how-to-study-placeholder');
    }
}