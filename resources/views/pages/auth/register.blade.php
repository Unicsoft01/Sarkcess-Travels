<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <form wire:submit="register" novalidate>
        {{-- Name --}}
        <div class="mb-3">
            <x-forms.text-input name="name" id="name" label="Full Name" wire:model.blur="name" type="text"
                placeholder="Enter your name" required autofocus autocomplete="name" />

            @error('name')
                <div id="name" class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <x-forms.text-input name="email" id="email" label="Email" wire:model.blur="email" type="email"
                placeholder="Enter your email" required autocomplete="username" />

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
                    {{ __('Register') }}
            </button>
        </div>
        <p class="text-danger text-center">Already have an Account? <a href="{{ route('login') }}"
            class="text-dark fw-bold ms-1" wire:navigate>
            Login to your Account
        </a>
    </p>
        <!-- Name -->
        {{-- <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div> --}}

        <!-- Email Address -->
        {{-- <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}

        <!-- Password -->
        {{-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div> --}}

        {{-- <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div> --}}
    </form>
</div>
