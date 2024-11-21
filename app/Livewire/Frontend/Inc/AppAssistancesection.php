<?php

namespace App\Livewire\Frontend\Inc;

use App\Models\AdmissionAssistance;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class AppAssistancesection extends Component
{
    public function render()
    {
        return view('frontend.inc.app-assistancesection', [
            'assistance' => AdmissionAssistance::get(),
        ]);
    }
    public function placeholder(array $params = [])
    {
        return view('frontend.placeholders.how-to-study-placeholder', $params);
    }
}