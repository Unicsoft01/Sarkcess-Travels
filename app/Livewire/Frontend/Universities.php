<?php

namespace App\Livewire\Frontend;

use App\Models\Countries;
use App\Models\Universities as ModelsUniversities;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;

#[Lazy()]
class Universities extends Component
{
    public $country;
    public $universities;
    public $slug;

    public function mount($slug = '')
    {
        $this->slug = $slug;

        if ($slug !== '') {
            $this->country = Countries::where('slug', $this->slug)->first();
            $this->universities = ModelsUniversities::where('country_id', $this->country->country_id)->latest()->get();
            // dd($this->country);
        } else {
            $this->universities = ModelsUniversities::latest()->get();
            // dd($this->universities);
        }
    }
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.universities');
    }

    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}

// #[Layout('layouts.frontend')]
// public function render()
// {
//     return view('frontend.universities',
//         [
//             'universities' => ModelsUniversities::get(),
//         ]
//     );
// }