<?php

namespace App\Livewire\Admin\Applications;

use App\Models\Applications;
use Livewire\Component;

class ApplyNowDetails extends Component
{
    public $details, $id;
    public function mount($id)
    {
        $this->details = Applications::find($id);
    }
    
    public function render()
    {
        return view('admin.applications.apply-now-details');
    }
}