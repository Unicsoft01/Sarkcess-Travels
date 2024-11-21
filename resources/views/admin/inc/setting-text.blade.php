<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title d-flex align-items-center gap-1">
                    Name and Description
                    <span class="text-success">#</span>
                </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div>
                        <form class="row g-2" wire:submit="updateSettings" novalidate>
                            <x-forms.text-input type="text" required name="name" wire:model.blur="name"
                                label="Site name" />
                            @error('name')
                                <div id="name" class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                            <x-forms.text-input type="text" required name="description" wire:model.blur="description"
                                label="Motto or Short description" />
                            @error('description')
                                <div id="description" class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
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
