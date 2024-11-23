<?php

namespace App\Livewire\Admin\Applications;

use App\Models\Applications;
use Livewire\Attributes\On;
use Livewire\Component;

class ApplyNow extends Component
{

    public $applications;

    public function mount()
    {
        $this->applications = Applications::with('university:university_id,university')->latest()->get();
    }

    #[On('Confirm-Delete')]
    public function DeleteRecord($id = 26)
    {
        // $record = Applications::find($id);
        // $record->delete();
        $this->dispatch(
            'swal',
            [
                'title' => 'Great!',
                'message' => 'Record Deleted successfully',
                'icon' => 'success'
            ]
        );
    }

    public function render()
    {
        return view('admin.applications.apply-now');
    }
}