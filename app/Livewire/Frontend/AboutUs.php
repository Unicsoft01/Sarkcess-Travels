<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

// #[Lazy()]
class AboutUs extends Component
{
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.about-us');
    }

    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}