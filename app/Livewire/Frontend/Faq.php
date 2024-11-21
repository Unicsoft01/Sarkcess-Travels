<?php

namespace App\Livewire\Frontend;

use App\Models\Faq as ModelsFaq;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Faq extends Component
{
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.faq', [
            'faqs' => ModelsFaq::latest()->get(),
        ]);
    }

    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}