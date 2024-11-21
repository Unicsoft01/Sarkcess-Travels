<?php

namespace App\Livewire\Frontend\Inc;

use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class BbCourses extends Component
{
    public function render()
    {
        return view('frontend.inc.bb-courses');
    }
    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}