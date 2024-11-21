<?php

namespace App\Livewire\Frontend\Inc;

use App\Models\Blog;
use Livewire\Component;

class RecentPostWgt extends Component
{
    public $posts;

    public function mount($posts = null)
    {
        if ($posts != null) {
            $this->posts = $posts;
        } else {
            $this->posts = Blog::with('user')->latest()->get();
        }
    }
    public function render()
    {
        return view('frontend.inc.recent-post-wgt');
    }
}