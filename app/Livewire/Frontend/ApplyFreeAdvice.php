<?php

namespace App\Livewire\Frontend;

use App\Mail\acknowledgeNewApplications;
use App\Mail\CopyOfMail;
use App\Models\FreeAdviceApplications;
use App\Models\User;
use App\Notifications\AcknowledgeNewApplications as AlertUser;
use App\Notifications\NewApplicationNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Livewire\Attributes\Layout;
// use Livewire\Attributes\Lazy;
use Livewire\Attributes\Validate;
use Livewire\Component;

// #[Lazy()]
class ApplyFreeAdvice extends Component
{

    #[Validate('required | string|min:3|max:30')]
    public $purpose;

    #[Validate('required | string|min:3|max:30')]
    public $fullname;

    #[Validate('required | string|min:3|max:30')]
    public $email;

    #[Validate('required | string|min:3|max:22')]
    public $phone;

    #[Validate('required | string|min:3|max:30')]
    public $qualification;

    #[Validate('required | string|min:3|max:30')]
    public $country;

    // #[Validate('required |max:3')]
    // public $zip;

    #[Validate('required | string|min:3|max:1000')]
    public $message;

    #[Layout('layouts.applylayout')]
    public function render()
    {
        return view('frontend.apply-free-advice');
    }

    public function create()
    {
        $validatedData = $this->validate();
        dd($validatedData);
        FreeAdviceApplications::create($this->pull());

        try {
            //notify admin via mail
            $admins = User::where('admin_level', 1)->get();

            Notification::send($admins, new NewApplicationNotification($validatedData));

            // send welcome message to user
            Mail::to($validatedData['email'])
                ->send(new acknowledgeNewApplications($validatedData));


            // send copy to FromEmail
            $this->SendCopyMail($validatedData['purpose'], $validatedData);
            
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
            // $this->dispatch(
            //     'swal',
            //     [
            //         'title' => 'Snap!',
            //         'message' => 'Sorry we can\'t send emails at the moment.',
            //         'icon' => 'warning'
            //     ]
            // );
        }
    }

    public function SendCopyMail($purpose, $data)
    {
        if ($purpose == 'Study Abroad inquiries') {
            $sentFrom = 'info@sarkcessconsults.org';
        } elseif ($purpose == 'Visa Assistance') {
            $sentFrom = 'admission@sarkcessconsults.org';
        } elseif ($purpose == 'Application Submission') {
            $sentFrom = 'apply@sarkcessconsults.org';
        } else {
            $sentFrom = 'info@sarkcessconsults.org';
        }

        Mail::to($sentFrom)
            ->send(new CopyOfMail($data));
    }

    // public function placeholder(array $params = [])
    // {
    //     return view('frontend.placeholders.how-to-study-placeholder', $params);
    // }
}