<?php

namespace App\Livewire\Admin;

use App\Models\Countries;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CountryCreate extends Component
{
    use WithFileUploads;

    #[Validate('required | image')]
    public $logo;

    public $thumbnail;
    
    
    #[Validate('Required | unique:countries')]
    public $country;
    #[Validate('Required')]
    public $short_note;
    // #[Validate('Required')]
    public $slug;

    public function createCountry()
    {
        $this->validate();
        $name = $this->logo->getClientOriginalName();
        $this->thumbnail = $this->logo->storeAs('countries', $name, 'public');

        Countries::create($this->pull());

        $this->dispatch(
            'swal',
            [
                'title' => 'Country Saved Successfully!',
                'message' => 'Proceed to add Universities and posts!',
                'icon' => 'success'
            ]
        );
    }

    public function generateSlug()
    {
        $this->slug = "study-in-" . Str::slug($this->country);
    }

    public function render()
    {
        return view('admin.country-create');
    }
}