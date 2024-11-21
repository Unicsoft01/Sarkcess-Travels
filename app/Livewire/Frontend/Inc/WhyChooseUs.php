<?php

namespace App\Livewire\Frontend\Inc;

use Livewire\Component;
use Livewire\Attributes\Lazy;

// #[Lazy()]

class WhyChooseUs extends Component
{
    public function render()
    {
        return view('frontend.inc.why-choose-us');
    }
    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}