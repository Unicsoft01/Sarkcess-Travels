<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Livewire\Forms\DeleteRecords;

class BlogIndex extends Component
{
    public DeleteRecords $deletePrompt;
    public function render()
    {
        return view('admin.blog-index', [
            'posts' => Blog::with('user')->latest()->get(),
        ]);
    }

    protected $listeners = [
        'swal' => '$refresh'
    ];

    #[On('Confirm-Delete')]
    public function DeleteRecord($id)
    {
        $this->deletePrompt->DeleteRecord('App\Models\Blog', $id);

        $this->dispatch(
            'swal',
            $this->deletePrompt->Swal()
        );
    }
}