<div class="container-xxl">
    <x-slot:phead>Social Media Handles</x-slot>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon icon="solar:shop-2-bold-duotone"
                            class="text-success fs-20"></iconify-icon>
                        {{-- <small> --}}
                            [blank fields will be replaced with <span class="text-primary">#</span> and will be treated
                            as empty]
                        {{-- </small> --}}
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div>
                            <form class="row g-2" wire:submit="updateMedia" novalidate>
                                <div class="col-lg-6">
                                    <x-forms.text-input value="#" type="text" required name="twitter"
                                        wire:model.blur="twitter" label="twitter" />
                                    @error('twitter')
                                        <div id="twitter" class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <x-forms.text-input value="#" type="text" required name="facebook"
                                        wire:model.blur="facebook" label="Facebook" />
                                    @error('facebook')
                                        <div id="facebook" class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <x-forms.text-input value="#" type="text" required name="youtube"
                                        wire:model.blur="youtube" label="Youtube" />
                                    @error('youtube')
                                        <div id="title" class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <x-forms.text-input value="#" type="text" required name="gmail"
                                        wire:model.blur="gmail" label="Gmail" />
                                    @error('gmail')
                                        <div id="title" class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <x-forms.text-input value="#" type="text" required name="insta"
                                        wire:model.blur="insta" label="insta" />
                                    @error('insta')
                                        <div id="title" class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    {{-- <x-forms.text-input value="#" type="text" required name="linkedin"
                                        wire:model.blur="linkedin" label="LinkedIn" />
                                    @error('linkedin')
                                        <div id="title" class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-success btn-md me-2" type="submit">
                                        <span class="spinner-border spinner-border-sm me-1" role="status"
                                            aria-hidden="true" wire:loading></span>
                                        Update Media Details
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.alerts')
</div>
