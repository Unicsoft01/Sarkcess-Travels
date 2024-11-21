<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title d-flex align-items-center gap-1">
                    Dark Light
                    <span class="text-primary">#</span>
                </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div>
                        <form class="row g-2" wire:submit="updateLogo" novalidate>
                                <div class="col-md-12">
                                    <img class="card-img-top img-fluid rounded-2 img-responsive
                                    "
                                        alt="{{ Storage::url($logo_light) }}"
                                        src="{{ Storage::url($logo_light) }}"
                                         title="Slider 1 Sample Preview">
                                </div>
                                {{-- asset("app/public/".$logo_light) --}}
                                <div class="col-12">
                                    <label for="logo" class="form-label">Site logo</label>

                                    <input class="form-control @error('logo') is-invalid @enderror" id="logo"
                                        type="file" required name="logo" wire:model.blur="logo">
                                    @error('logo')
                                        <div id="logo" class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            <div class="col-12">
                                <button class="btn btn-success btn-md me-2" type="submit">
                                    <span class="spinner-border spinner-border-sm me-1" role="status"
                                        aria-hidden="true" wire:loading></span>
                                    Update Site Settings
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
