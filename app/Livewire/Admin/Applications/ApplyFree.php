<?php

namespace App\Livewire\Admin\Applications;

use App\Models\FreeAdviceApplications;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Livewire\Forms\DeleteRecords;

class ApplyFree extends Component
{
    public DeleteRecords $deletePrompt;

    public $applications;

    public function mount()
    {
        $this->applications = FreeAdviceApplications::latest()->get();
    }

    protected $listeners = [
        'swal' => '$refresh'
    ];

    #[On('Confirm-Delete')]
    public function DeleteRecord($id)
    {
        $this->deletePrompt->DeleteRecord('App\Models\FreeAdviceApplications', $id);

        $this->dispatch(
            'swal',
            $this->deletePrompt->Swal()
        );
    }

    public function render()
    {
        return view('admin.applications.apply-free');
    }
}