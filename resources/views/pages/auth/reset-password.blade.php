<?php

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    #[Locked]
    public string $token = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Mount the component.
     */
    public function mount(string $token): void
    {
        $this->token = $token;

        $this->email = request()->string('email');
    }

    /**
     * Reset the password for the given user.
     */
    public function resetPassword(): void
    {
        $this->validate([
            'token' => ['required'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset($this->only('email', 'password', 'password_confirmation', 'token'), function ($user) {
            $user
                ->forceFill([
                    'password' => Hash::make($this->password),
                    'remember_token' => Str::random(60),
                ])
                ->save();

            event(new PasswordReset($user));
        });

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        if ($status != Password::PASSWORD_RESET) {
            $this->addError('email', __($status));

            return;
        }

        // Session::flash('status', __($status));
        $this->dispatch('swal', [
            'title' => 'Great!',
            'message' => __($status),
            'icon' => 'success',
        ]);

        $this->redirectRoute('login', navigate: true);
    }
}; ?>

<div>
    <form wire:submit="resetPassword" novalidate>

        <div class="mb-3">
            <x-forms.text-input name="email" id="email" label="Email" wire:model.blur="email" type="email"
                placeholder="Enter your email" required autofocus autocomplete="username" />

            @error('email')
                <div id="email" class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- password --}}
        <div class="mb-3">
            <x-forms.text-input name="password" label="Password" wire:model.blur="password" type="password"
                placeholder="Enter a new Password" required />

            @error('password')
                <div id="password" class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- password Comfirmation --}}
        <div class="mb-3">
            <x-forms.text-input name="password_confirmation" label="Confirm Password" wire:model.blur="password_confirmation" type="password"
                placeholder="Enter Password again" required />

            @error('password_confirmation')
                <div id="password_confirmation" class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-1 text-centerw d-grids">
            <button class="btn btn-soft-success" type="submit">
                <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"
                    wire:loading></span>
                    {{ __('Reset Password') }}
            </button>
        </div>

        <!-- Email Address -->
        {{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}

        <!-- Password -->
        {{-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input wire:model="password" id="password" class="block mt-1 w-full" type="password" name="password"
                required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}

        <!-- Confirm Password -->
        {{-- <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div> --}}
    </form>
</div>
@include('components.alerts')
