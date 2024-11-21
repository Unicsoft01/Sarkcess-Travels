<?php

namespace App\Livewire\Admin;

use App\Models\Universities;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Component;

class UniversityIndex extends Component
{

    public $universities;
    
    public function mount(){
        $this->universities = Universities::with('countryLocated:country_id,country')->latest()->get();
    }
    
    public function render()
    {
        return view('admin.university-index');
    }
}

// return view('admin.university-index',
// [
//     'universities' => Universities::with(['countryLocated' => fn ($countries) => $countries->chaperone()])->get(),
// ]
// );