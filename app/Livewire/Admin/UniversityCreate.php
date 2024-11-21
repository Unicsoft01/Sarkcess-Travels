<?php

namespace App\Livewire\Admin;

use App\Models\AboutUniversities;
use App\Models\Countries;
use App\Models\Universities;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class UniversityCreate extends Component
{
    use WithFileUploads;
    
    #[Validate('Required |unique:universities,university')]
    public $university;
    #[Validate('Required')]
    public $logo;
    #[Validate('Required |unique:universities,slug')]
    public $slug;
    #[Validate('Required')]
    public $country_id;
    // #[Validate('Required')]
    public $post_id;

    public $thumbnail;
    
    public $about;

    public $post = 'enter post';

    public function create()
    {
        $this->validate();

        $this->about = AboutUniversities::create($this->only(['post']));
        $this->post_id = $this->about->post_id;
        
        $name = $this->logo->getClientOriginalName();
        $this->thumbnail = $this->logo->storeAs('unversities', $name, 'public');
        // dd(AboutUniversities::create($this->only(['post'])));
        // $this->reset();

        // dd($this->pull());
        Universities::create($this->pull());
        // Universities::create($this->only([
        //     'university' => $this->university,
        //     'slug' => $this->slug,
        //     'about' => $this->about->post_id,
        //     'thumbnail' => $this->thumbnail,
        //     'slug' => $this->slug,
        // ]));

        $this->dispatch(
            'swal',
            [
                'title' => 'Created successfully!',
                'message' => 'You can proceed to add posts!',
                'icon' => 'success'
            ]
        );
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->university);
    }

    public function render()
    {
        return view(
            'admin.university-create',
            ['countries' =>  Countries::get()]
        );
    }
}