<?php

namespace App\Livewire\Frontend\Inc;

use App\Models\SectionTexts;
use Livewire\Attributes\Lazy;
use Livewire\Component;

// #[Lazy]
class IntroSec extends Component
{
    public function render()
    {
        return view('frontend.inc.intro-sec', [
            'intro' => SectionTexts::find(4),
        ]);
    }
    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}