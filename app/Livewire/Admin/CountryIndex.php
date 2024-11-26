<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Countries;
use App\Livewire\Forms\DeleteRecords;
use Livewire\Attributes\On;

class CountryIndex extends Component
{
    public DeleteRecords $deletePrompt;
    public function render()
    {
        return view('admin.country-index',
            [
                'countries' => Countries::latest()->get(),
            ]
        );
    }

    protected $listeners = [
        'swal' => '$refresh'
    ];

    #[On('Confirm-Delete')]
    public function DeleteRecord($id)
    {
        $this->deletePrompt->DeleteRecord('App\Models\Countries', $id);

        $this->dispatch(
            'swal',
            $this->deletePrompt->Swal()
      );
    }
}