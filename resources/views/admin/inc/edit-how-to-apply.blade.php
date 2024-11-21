<div class="card shd">
    <div class="card-header d-flex justify-content-between align-items-center gap-1">
        <h4 class="card-title flex-grow-1 mb-1 anchor" id="how2applysection">
            Edit <b class="text-primary">{{ $section_title }}</b> section <a class="anchor-link"
                href="#how2applysection">#</a>
        </h4>

        <a href="{{ url('/') }}/" class="btn btn-sm btn-soft-success" target="_blank">
            Live preview
        </a>
    </div>
    <img class="card-img-top img-fluid" src="{{ url('/') }}/assets/images/screenshots/how2applysection.png"
        alt="{{ $section_title }} Section Sample Preview" title="{{ $section_title }} Section Sample Preview">
    <div class="card-body">
        {{-- 
         {"app_id":1,"section_id":5,"step1":"REGISTRATION","description1":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry","step2":"DOCUMENTATION","description2":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry","step3":"Get started now","description3":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry","status":null,"created_at":"2024-10-21T07:21:41.000000Z","updated_at":"2024-10-21T07:21:41.000000Z"}
Step One
 --}}
        <div>
            <form class="row g-2" wire:submit="updateHowToApply" novalidate>
                <x-forms.text-input type="text" required name="section_title" wire:model.blur="section_title"
                    label="Section Title" />
                @error('section_title')
                    <div id="title" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror

                <x-forms.text-input type="text" name="section_sub_title" wire:model.blur="section_sub_title"
                    label="Section Sub Title" />
                @error('section_sub_title')
                    <div id="section_sub_title" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror

                <x-forms.text-input type="text" required name="step1" wire:model.blur="step1" label="Step One" />
                @error('step1')
                    <div id="step1" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror

                <div class="col-md-12">
                    <label for="description1" class="form-label">Description One</label>
                    <textarea class="form-control @error('description1') is-invalid @enderror" id="description1"
                        placeholder="Introductory body message" wire:model.blur="description1" rows="3"></textarea>
                </div>
                <div>
                    @error('description1')
                        <div id="description1" class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- step 2 --}}
                
                <x-forms.text-input type="text" required name="step2" wire:model.blur="step2" label="Step Two" />
                @error('step2')
                    <div id="step2" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
                <div class="col-md-12">
                    <label for="description2" class="form-label">Description Two</label>
                    <textarea class="form-control @error('description2') is-invalid @enderror" id="description2"
                        placeholder="Introductory body message" wire:model.blur="description2" rows="3"></textarea>
                </div>
                <div>
                    @error('description2')
                        <div id="description2" class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- three --}}
                
                <x-forms.text-input type="text" required name="step3" wire:model.blur="step3" label="Step Three" />
                @error('step3')
                    <div id="step3" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
                <div class="col-md-12">
                    <label for="description3" class="form-label">Description Three</label>
                    <textarea class="form-control @error('description3') is-invalid @enderror" id="description3"
                        placeholder="Introductory body message" wire:model.blur="description3" rows="3"></textarea>
                </div>
                <div>
                    @error('description3')
                        <div id="description3" class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <div class="col-12">
                    <button class="btn btn-soft-success btn-md me-2" type="submit">
                        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"
                            wire:loading></span>
                        Update Section Records
                    </button>
                </div>
            </form>
        </div>
    </div>
    @include('components.alerts')
</div>
