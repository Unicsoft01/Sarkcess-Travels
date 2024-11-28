<x-slot:phead>Create Q&A </x-slot>

<div class="container-fluid">
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="card shd">
                <div class="card-body">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 py-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('welcome') }}">
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.homepage') }}#alert-link">
                                    previous
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card shd">
                <div class="card-header">
                    <h4 class="card-title">Frequently Asked Question/Answer </h4>
                </div>
                <div class="card-body">
                    <form class="row g-2" wire:submit="create" novalidate>

                        <x-forms.text-input type="text" required name="question" wire:model.blur="question"
                            label="Frequently Asked Question" />
                        @error('question')
                            <div id="question" class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        <x-forms.text-input type="text" required name="answer" wire:model.blur="answer"
                            label="Anser to Question" />
                        @error('answer')
                            <div id="answer" class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                                               
                        <div class="col-12">
                            <button class="btn btn-soft-success btn-md me-2" type="submit">
                                <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"
                                    wire:loading></span>
                                Create record
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('components.alerts')
</div>
