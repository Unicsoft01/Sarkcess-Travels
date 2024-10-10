<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Homepage extends Component
{
    #[Layout('layouts.guest')] 
    public function render()
    {
        return view('frontend.homepage');
    }
}