<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Countries;

class CountryIndex extends Component
{
    public function render()
    {
        return view('admin.country-index',
        [
            'countries' => Countries::latest()->get(),
        ]
    );
    }
}