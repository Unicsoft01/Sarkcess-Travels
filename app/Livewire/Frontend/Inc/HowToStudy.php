<?php

namespace App\Livewire\Frontend\Inc;

use App\Models\HowToApply;
use Livewire\Component;
use Livewire\Attributes\Lazy;

#[Lazy()]
class HowToStudy extends Component
{
    public function render()
    {
        return view('frontend.inc.how-to-study', [
            'how2apply' => HowToApply::first(),
        ]);
    }

    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }

}