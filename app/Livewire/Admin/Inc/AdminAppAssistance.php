<?php

namespace App\Livewire\Admin\Inc;

use Livewire\Attributes\Lazy;
use App\Models\AdmissionAssistance;
use Livewire\Attributes\On;
use Livewire\Component;

#[Lazy]
class AdminAppAssistance extends Component
{
    public function render()
    {
        return view('admin.inc.admin-app-assistance', [
            'assistance' => AdmissionAssistance::get(),
        ]);
    }

    #[On('edit-assistance')]
    public function OpenAssistanceEditor($id)
    {
        $this->redirectRoute('update.admission-assistance', ['id' => $id]);
    }

    public function OpenPostEditor($id)
    {
        $this->redirectRoute('admin.admission-assistance-create', ['id' => $id]);
    }
}