<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;

class BlogIndex extends Component
{
    public function render()
    {
        return view('admin.blog-index', [
            'posts' => Blog::with('user')->latest()->get(),
        ]);
    }
}