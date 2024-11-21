<?php

namespace App\Livewire\Admin\Inc;

use App\Models\Posts;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AdAssistanceCreate extends Component
{

    #[Validate('required')]
    public $id;
    #[Validate('required')]
    public $post;
    public function mount($id){
        $this->id = $id;
        $this->post = Posts::findOrFail($id)->body;
    }

    public function UpdatePost()
    {
        $this->validate();
        // $this->post->update($this->all());
        $this->dispatch(
            'swal',
            [
                'title' => 'Great!',
                'message' => 'Post created Successfully!',
                'icon' => 'success'
            ]
        );
        // $this->redirectRoute('admin.homepage');
    }
    
    public function render()
    {
        return view('admin.inc.ad-assistance-create');
    }
}