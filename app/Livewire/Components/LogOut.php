<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogOut extends Component
{
    public function logout(Logout $logout): void
    {
        // $logout();
        Auth::logout();


        $this->redirect('/login', navigate: true);
    }
    
    public function render()
    {
        return view('components.log-out');
    }
}