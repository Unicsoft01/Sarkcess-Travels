<div>
    <h3 style="text-align: center;" class="">Apply to Study here</h3>

    <form class="form-outer" wire:submit="create" novalidate>
        {{-- first_name --}}
        <div class="row">
            <div class="col-sm-12">
                <input name="first_name" type="text" placeholder="First Name" required wire:model.blur="first_name">
                @error('first_name')
                    <div id="first_name" class="text-danger mt-1g" style="color: crimson;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        {{-- last_name --}}
        <div class="row">
            <div class="col-sm-12">
                <input name="last_name" type="text" placeholder="Last Name" required wire:model.blur="last_name">
                @error('last_name')
                    <div id="last_name" class="text-danger mt-1g" style="color: crimson;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        {{-- email --}}
        <div class="row">
            <div class="col-sm-12">
                <input name="email" type="text" placeholder="Email" required wire:model.blur="email">
                @error('email')
                    <div id="email" class="text-danger mt-1g" style="color: crimson;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        {{-- phone --}}
        <div class="row">
            <div class="col-sm-12">
                <input name="phone" type="text" placeholder="Phone" required wire:model.blur="phone">
                @error('phone')
                    <div id="phone" class="text-danger mt-1g" style="color: crimson;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        {{-- qualification --}}
        <div class="row">
            <div class="col-sm-12">
                <select name="qualification" id="qualification" required wire:model.blur="qualification">
                    <option value="">Highest Qualification</option>
                    <option value="olevel">O'level</option>
                    <option value="ond">OND</option>
                    <option value="hnd">HND</option>
                    <option value="B.Sc">B.Sc.</option>
                    <option value="Masters">Masters</option>
                    <option value="Phd">Phd</option>
                </select>
                @error('qualification')
                    <div id="qualification" class="text-danger mt-1g" style="color: crimson;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        {{-- country --}}
        <div class="row">
            <div class="col-sm-12">
                <input name="country" type="text" placeholder="Country" required wire:model.blur="country">
                @error('country')
                    <div id="country" class="text-danger mt-1g" style="color: crimson;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        {{-- state --}}
        <div class="row">
            <div class="col-sm-12">
                <input name="state" type="text" placeholder="State" required wire:model.blur="state">
                @error('state')
                    <div id="state" class="text-danger mt-1g" style="color: crimson;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        {{-- budget        --}}
        <div class="row">
            <div class="col-sm-12">
                <select name="budget" required wire:model.blur="budget">
                    <option value="">Select a budget</option>
                    <option value="0">I don't have money</option>
                    <option value="1-4999">$1-$4,999</option>
                    <option value="5000-10999">$5,000-$10,999</option>
                    <option value="11000-20000">$11,000-$20,000</option>
                </select>
                @error('budget')
                    <div id="budget" class="text-danger mt-1g" style="color: crimson;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>


        <button class="btn btn-success">
            Submit application
        </button>
    </form>
    @include('components.alerts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</div>
