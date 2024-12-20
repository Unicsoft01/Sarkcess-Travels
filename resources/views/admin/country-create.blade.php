<x-slot:phead>Create A new country </x-slot>

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
                    <h4 class="card-title">Country </h4>
                </div>
                <div class="card-body">
                    <form class="row g-2" wire:submit="createCountry" novalidate>
                        {{-- <div class="col-md-12">
                            <img class="card-img-top img-fluid rounded-2 img-responsive
                            "
                                alt="{{ Storage::url($thumbnail) }}"
                                src="{{ Storage::url($thumbnail) }}"
                                 title="">
                        </div> --}}
                        <div class="col-12">
                            <label for="logo" class="form-label">Country Banner</label>

                            <input class="form-control @error('logo') is-invalid @enderror" id="logo"
                                type="file" required name="thumbnail" wire:model.blur="logo">
                            @error('logo')
                                <div id="logo" class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <x-forms.text-input type="text" required name="country" wire:model.blur="country"
                            label="Country Name" wire:keyup='generateSlug' />
                        @error('country')
                            <div id="country" class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        <x-forms.text-input type="text" name="short_note" wire:model.blur="short_note"
                            label="Short intro" />
                        @error('short_note')
                            <div id="short_note" class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        <x-forms.text-input type="text" required name="slug" wire:model.blur="slug"
                            label="Slug [autogenerated url]" readonly />
                        @if ($country)
                        <small class="text-success">
                             will be visible to users via:
                            <b>{{ url('/') }}/{{ $slug }}</a>
                            </b>
                        </small>
                        @endif
                        @error('slug')
                            <div id="slug" class="text-danger mt-1">
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
