<div class="card shd">
    <div class="card-header d-flex justify-content-between align-items-center gap-1">
        <h4 class="card-title flex-grow-1 mb-1 anchor" id="slider{{ $edit->section_id }}">
            Slider {{ $edit->section_id }} <a class="anchor-link" href="#slider{{ $edit->section_id }}">#</a>
        </h4>

        <a href="{{ url('/') }}/" class="btn btn-sm btn-soft-success" target="_blank">
            Live preview
        </a>
    </div>
    <img class="card-img-top img-fluid"
        src="{{ url('/') }}/assets/images/screenshots/slider{{ $edit->section_id }}.png"
        alt="Slider {{ $edit->section_id }} Sample Preview" title="Slider {{ $edit->section_id }} Sample Preview">
    <div class="card-body">
        {{-- {{ $edit }} --}}
        <div>
            <form class="row g-2" wire:submit="updateSlider({{ $edit->section_id }})" novalidate>
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

                <div class="col-12">
                    <button class="btn btn-soft-success btn-md me-2" type="submit">
                        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"
                            wire:loading></span>
                        Update Slider {{ $edit->section_id }} Records
                    </button>
                </div>
            </form>
        </div>
    </div>
    @include('components.alerts')
</div>
