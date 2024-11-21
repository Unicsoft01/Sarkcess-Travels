<?php

namespace App\Livewire\Frontend;

use App\Models\Blog as ModelsBlog;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Blog extends Component
{
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.blog', [
            'posts' => ModelsBlog::with('user')->latest()->get(),
        ]);
    }

    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}