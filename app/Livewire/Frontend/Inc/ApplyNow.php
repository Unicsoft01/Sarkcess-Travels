<?php

namespace App\Livewire\Frontend\Inc;

use App\Mail\SendCopyOfApplication;
use App\Mail\WelcomeApplicant;
use App\Models\Applications;
use App\Models\User;
use App\Notifications\NewStudyApplication;
use Illuminate\Support\Facades\Notification;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
// use Livewire\Attributes\Lazy;

// #[Lazy()]
class ApplyNow extends Component
{
    #[Validate('required')]
    public $university_id;
    #[Validate('required | string|min:3|max:30')]
    public $first_name;
    #[Validate('required | string|min:3|max:30')]
    public $last_name;
    #[Validate('required | string|min:3|max:30')]
    public $email;
    #[Validate('required | string|min:3|max:22')]
    public $phone;
    #[Validate('required | string|min:3|max:30')]
    public $qualification;
    #[Validate('required | string|min:3|max:30')]
    public $country;
    #[Validate('required | string|min:3|max:30')]
    public $state;
    #[Validate('required')]
    public $budget;

    public $university;

    public function mount($id)
    {
        $this->university_id = $id;
    }

    protected $listeners = [
        'swal' => '$refresh'
    ];

    public function create()
    {
        $validatedData = $this->validate();
        Applications::create($this->pull());

        try {
            //notify admin via mail
            $admins = User::where('admin_level', 1)->get();
            Notification::send($admins, new NewStudyApplication($validatedData));

            // send welcome message to user
            Mail::to($validatedData['email'])
                ->send(new WelcomeApplicant($validatedData));

            // send copy to FromEmail
            $this->SendCopyMail($validatedData);
            
            $this->dispatch(
                'swal',
                [
                    'title' => 'Great!',
                    'message' => 'Your application has been recieved successfully. You should get a response via Email shortly!',
                    'icon' => 'success'
                ]
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function render()
    {
        return view('frontend.inc.apply-now');
    }

    public function SendCopyMail($data)
    {
        $sentFrom = 'apply@sarkcessconsults.org';
        Mail::to($sentFrom)
            ->send(new SendCopyOfApplication($data));
    }
}