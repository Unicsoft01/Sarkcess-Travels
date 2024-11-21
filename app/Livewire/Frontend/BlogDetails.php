<?php

namespace App\Livewire\Frontend;

use App\Models\Blog;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class BlogDetails extends Component
{
    public $post;
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->post = Blog::with('user:user_id,name')->where('slug', $this->slug)->first();//latest()->get()

        // dd($this->post);
    }
    
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.blog-details');
    }

    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}