<?php

namespace App\Livewire\Classes;

// use Livewire\Attributes\On;
use Livewire\Component;

class DeletePromt extends Component
{
      // public $Model;
      
      // public function mount($Model, $id)
      // {
      //     $this->Model = $Model::find($id);
      // }
      protected $listeners = [
            'swal' => '$refresh'
      ];

      // #[On('Confirm-Delete')]
      public function DeleteRecord($Model, $id)
      {
            $record = $Model::find($id);
            $record->delete();
            $this->dispatch(
                  'swal',
                  [
                        'title' => 'Great!',
                        'message' => 'Record Deleted successfully',
                        'icon' => 'success'
                  ]
            );
      }
}