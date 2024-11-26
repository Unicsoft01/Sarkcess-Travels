<?php

namespace App\Livewire\Admin\Applications;

use App\Models\FreeAdviceApplications;
use Livewire\Component;

class ApplyFreeDetails extends Component
{

    public $details;
    
    public function mount($id)
    {
        $this->details = FreeAdviceApplications::find($id);
    }

    public function render()
    {
        return view('admin.applications.apply-free-details');
    }
}