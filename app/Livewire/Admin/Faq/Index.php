<?php

namespace App\Livewire\Admin\Faq;

use App\Livewire\Forms\DeleteRecords;
use App\Models\Faq;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public DeleteRecords $deletePrompt;
    
    public function render()
    {
        return view(
            'admin.faq.index',
            [
                'faqs' => Faq::latest()->get(),
            ]
        );
    }

    protected $listeners = [
        'swal' => '$refresh'
    ];

    #[On('Confirm-Delete')]
    public function DeleteRecord($id)
    {
        $this->deletePrompt->DeleteRecord('App\Models\Faq', $id);

        $this->dispatch(
            'swal',
            $this->deletePrompt->Swal()
        );
    }
}