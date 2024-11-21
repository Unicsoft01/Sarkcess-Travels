<?php

namespace App\Livewire\Frontend;

use App\Models\Countries as ModelsCountries;
use App\Models\Universities;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Countries extends Component
{
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.countries',
            [
                'countries' => ModelsCountries::latest()->get(),
            ]
        );
    }

    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}