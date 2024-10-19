<div class="card shd">
    <div class="card-header d-flex justify-content-between align-items-center gap-1">
        <h4 class="card-title flex-grow-1 mb-1 anchor" id="introsection">
            Intro Section <a class="anchor-link" href="#introsection">#</a>
        </h4>

        <a href="{{ url('/') }}/" class="btn btn-sm btn-soft-success" target="_blank">
            Live preview
        </a>
    </div>
    <img class="card-img-top img-fluid"
        src="{{ url('/') }}/assets/images/screenshots/introsection.png"
        alt="Intro Section Sample Preview" title="Intro Section Sample Preview">
    <div class="card-body">
        {{-- {{ $edit }} --}}
        <div>
            <form class="row g-2" wire:submit="updateIntro({{ $edit->section_id }})" novalidate>
                <x-forms.text-input type="text" required name="section_title" wire:model.blur="section_title"
                    label="Section Title" />
                @error('section_title')
                    <div id="title" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror

                <x-forms.text-input type="text" name="section_sub_title" wire:model.blur="section_sub_title"
                    label="Slider Sub Title" />
                @error('section_sub_title')
                    <div id="section_sub_title" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror

                <x-forms.text-input type="text" required name="description" wire:model.blur="description"
                    label="Section Description" />
                @error('description')
                    <div id="description" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror

                {{-- <textarea name="message" id="message" placeholder="Body" cols="30" rows="10"></textarea> --}}

                <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                    placeholder="Introductory body message" wire:model.blur="description" cols="30" rows="10"></textarea>
                <div>
                    @error('description')
                        <div id="description" class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-12">
                    <button class="btn btn-soft-success btn-md me-2" type="submit">
                        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"
                            wire:loading></span>
                        Update Intro Section Records
                    </button>
                </div>
            </form>
        </div>
    </div>
    @include('components.alerts')
</div>
