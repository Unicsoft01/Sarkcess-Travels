<?php

namespace App\Livewire\Components;

use Livewire\Component;

class LogOut extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/login', navigate: true);
    }
    
    public function render()
    {
        return view('components.log-out');
    }
}