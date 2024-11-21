<?php

namespace App\Livewire\Frontend\Inc;

use App\Models\Blog;
use Livewire\Component;
use Livewire\Attributes\Lazy;

#[Lazy()]
class NewsEvents extends Component
{
    public function render()
    {
        return view('frontend.inc.news-events', [
            'posts' => Blog::with('user')->latest()->limit(3)->get(),
        ]);
    }

    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}