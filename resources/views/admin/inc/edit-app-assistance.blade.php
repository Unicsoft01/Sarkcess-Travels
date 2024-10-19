    <x-slot:phead>Edit {{ $edit->short_name }} - {{ $edit->fullname }}</x-slot>

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
                                    Edit {{ $edit->short_name }} - {{ $edit->fullname }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        {{-- @include('components.flash-messages') --}}

        <div class="row">
            <div class="col-lg-12">
                <div class="card shd">
                    <div class="card-header">
                        <h4 class="card-title">Update {{ $edit->short_name }} - {{ $edit->fullname }}</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-2" wire:submit="updateAssistance" novalidate>
                            <x-forms.text-input type="text" required name="short_name" wire:model.blur="short_name"
                                label="Abbreviated Name" />
                            @error('short_name')
                                <div id="title" class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                            <x-forms.text-input type="text" required name="fullname" wire:model.blur="fullname"
                                label="Full Name" />
                            @error('fullname')
                                <div id="slug" class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="col-12">
                                <button class="btn btn-success btn-md me-2" type="submit">
                                    <span class="spinner-border spinner-border-sm me-1" role="status"
                                        aria-hidden="true" wire:loading></span>
                                    Update {{ $edit->short_name }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('components.alerts')
    </div>
