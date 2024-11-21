<?php

namespace App\Livewire\Frontend\Inc;

use App\Models\AdmissionAssistance;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Sop extends Component
{

    public $slug;
    public function mount($sop){
        $this->slug = $sop;
    }
    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.inc.sop',[
            'post' => AdmissionAssistance::where('slug', $this->slug)->first(),
        ]);
    }

    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}