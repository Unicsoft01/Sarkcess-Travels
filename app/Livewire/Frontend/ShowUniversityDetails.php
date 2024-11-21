<?php

namespace App\Livewire\Frontend;

use App\Models\AboutUniversities;
use App\Models\Universities;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Lazy;

// #[Lazy()]
class ShowUniversityDetails extends Component
{
    public $about;
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->about = Universities::where('slug', $this->slug)->first();
    }
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.show-university-details');
    }

    // public function placeholder(array $params = [])
    // {
    //     return view('frontend.placeholders.how-to-study-placeholder', $params);
    // }
}