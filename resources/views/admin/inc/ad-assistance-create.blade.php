<x-slot:phead>Edit </x-slot>

<x-head.tinymce-config />

<div class="container-fluid">
    <div class="row">
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
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shd">
                <div class="card-header">
                    <h4 class="card-title">Update </h4>
                </div>
                <div class="card-body">
                    {{-- <form class="row g-2" wire:submit="UpdatePost" novalidate>
                        <textarea id="mytextarea" class="form-control @error('post') is-invalid @enderror"
                            placeholder="Introductory post message" wire:model.blur="post" >{{ $post }}</textarea>
                        <div>
                            @error('post')
                                <div id="mytextarea" class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button class="btn btn-success btn-md me-2" type="submit">
                                <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"
                                    wire:loading></span>
                                Save
                            </button>
                        </div>
                    </form> --}}
                    <form method="post" action="{{ route('examposts.patch') }}">
                        @csrf
                        @method('PATCH')

                        <textarea id="mytextarea" class="form-control @error('post') is-invalid @enderror"
                            placeholder="Introductory post message" name="post">
                            {{ $post }}
                        </textarea>

                        <input type="hidden" name="id" value="{{ $id }}">

                        <input type="submit" class="btn btn-secondary btn-lg mt-5">
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('components.alerts')
</div>
