<?php

namespace App\Livewire\Frontend\Inc;

use App\Models\Universities;
use Livewire\Component;

class Partners extends Component
{

    public $universities;
    public function mount()
    {
        $this->universities = Universities::latest()->get();
    }
    public function render()
    {
        return view('frontend.inc.partners');
    }

    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}