<?php

namespace App\Livewire\Forms;

// use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Universities;

class DeleteRecords extends Form
{

    public function DeleteRecord($Model, $id)
    {
        $record = $Model::find($id);
        $record->delete();
    }

    public function Swal(){
        return 
            [
                  'title' => 'Great!',
                  'message' => 'Record Deleted successfully',
                  'icon' => 'success'
            ]; 
    }
}