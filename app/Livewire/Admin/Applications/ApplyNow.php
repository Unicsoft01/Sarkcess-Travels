<?php

namespace App\Livewire\Admin\Applications;

use App\Models\Applications;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Livewire\Forms\DeleteRecords;

class ApplyNow extends Component
{
    public DeleteRecords $deletePrompt;

    public $applications;

    public function mount()
    {
        $this->applications = Applications::with('university:university_id,university')->latest()->get();
    }

    protected $listeners = [
        'swal' => '$refresh'
    ];

    #[On('Confirm-Delete')]
    public function DeleteRecord($id)
    {
        $this->deletePrompt->DeleteRecord('App\Models\Applications', $id);

        $this->dispatch(
            'swal',
            $this->deletePrompt->Swal()
        );
    }

    public function render()
    {
        return view('admin.applications.apply-now');
    }
}