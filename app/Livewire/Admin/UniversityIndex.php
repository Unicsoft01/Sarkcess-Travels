<?php

namespace App\Livewire\Admin;

use App\Models\Universities;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Livewire\Forms\DeleteRecords;

class UniversityIndex extends Component
{
    Public DeleteRecords $deletePrompt;

    public $universities;
    
    public function mount(){
        $this->universities = Universities::with('countryLocated:country_id,country')->latest()->get();
    }
    
    public function render()
    {
        return view('admin.university-index');
    }

    protected $listeners = [
        'swal' => '$refresh'
    ];

    #[On('Confirm-Delete')]
    public function DeleteRecord($id)
    {
        $this->deletePrompt->DeleteRecord('App\Models\Universities', $id);

        $this->dispatch(
            'swal',
            $this->deletePrompt->Swal()
      );
    }
}