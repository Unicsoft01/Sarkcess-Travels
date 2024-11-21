<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class ContactUs extends Component
{
    public $setting, $socialMedia;
    
    public function mount(){
        $this->setting = \App\Models\Settings::find(1);
        $this->socialMedia = \App\Models\MediaHandles::find(1);
    }
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.contact-us');
    }

    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}