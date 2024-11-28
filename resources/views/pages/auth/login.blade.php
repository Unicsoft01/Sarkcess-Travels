<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>


<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h2 class="fw-bold fs-24">Welcome Back</h2>

    <p class="text-muted mt-1 mb-4">Enter your email address and password to access
        admin panel.</p>

    <div class="mb-5">
        <form wire:submit="login" class="authentication-form" novalidate>
            {{-- email --}}
            <div class="mb-3">
                <x-forms.text-input name="form.email" label="Email" wire:model.blur="form.email" type="email"
                    placeholder="Enter your email" required autofocus autocomplete="email" />

                @error('form.email')
                    <div id="email" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- password --}}
            <div class="mb-3">
                <a href="{{ route('password.request') }}" class="float-end text-muted text-unline-dashed ms-1">Forgot Password?</a>
                <x-forms.text-input name="form.password" label="Password" wire:model.blur="form.password" type="password"
                    placeholder="Enter your password" required autocomplete="current-password" />

                @error('form.password')
                    <div id="password" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input wire:model="form.remember" id="remember" type="checkbox" class="form-check-input" name="remember">
                    <label class="form-check-label" for="remember">Remember
                        me</label>
                </div>
            </div>

            <div class="mb-1 text-center d-grid">
                <button class="btn btn-soft-success" type="submit">Sign In</button>
            </div>
        </form>
    </div>

    <p class="text-danger text-center">Don't have an account? <a href="{{ route('register') }}"
            class="text-dark fw-bold ms-1" wire:navigate>
            Sign Up
        </a>
    </p>

</div>
