<section class="login-wrapper register">
    <link data-navigate-once href="{{ url('/') }}/frontend/css/styles.css" rel="stylesheet">

    <div class="inner">
        @php
            $setting = App\Models\Settings::find(1);
        @endphp
        <div class="regiter-inner">
            <div class="login-logo">
                <a href="{{ url('/') }}/">
                    <img src="{{ Storage::url($setting->logo_light) }}" class="img-responsive" alt="">
                </a>
            </div>
            <div class="head-block">
                <h1>
                    Apply Now <br>
                    <small style="color: rgb(0, 78, 0)">Get free advice on your next choice of course!</small>
                </h1>
            </div>
            <div class="cnt-block">
                <form class="form-outer" wire:submit="create" novalidate>
                    <div class="row">
                        <div class="col-sm-12">
                            <input name="fullname" type="text" placeholder="Enter your Full Name" required
                                wire:model.blur="fullname">
                        </div>
                        @error('fullname')
                            <div id="fullname" class="text-danger mt-1g" style="color: crimson;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
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
                        <div class="col-sm-6">
                            <input name="email" type="email" placeholder="A valid Email is required" required
                                wire:model.blur="email">
                        </div>
                        @error('email')
                            <div id="email" class="text-danger mt-1g" style="color: crimson;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <select name="purpose" id="purpose" required wire:model.blur="purpose">
                                <option value="">What are you looking for?</option>
                                <option value="Study Abroad inquiries">Study Abroad inquiries</option>
                                <option value="Visa Assistance">Visa Assistance</option>
                                <option value="Application Submission">Application Submission</option>
                                <option value="others">Others</option>
                            </select>
                            @error('purpose')
                                <div id="purpose" class="text-danger mt-1g" style="color: crimson;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <input name="country" type="text" placeholder="your current country of residence"
                                required wire:model.blur="country">
                            @error('country')
                                <div id="country" class="text-danger mt-1g" style="color: crimson;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input name="phone" type="text" placeholder="Phone No. Whatsapp line preferrably" class="phone-now"
                                required wire:model.blur="phone">
                            @error('phone')
                                <div id="phone" class="text-danger mt-1g" style="color: crimson;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 clearfix">
                            <textarea name="message" id="message"
                                placeholder="What program are you interested in? (e.g., Computer Science, Business). Let us know any specific requirements or questions"
                                cols="30" rows="10" required wire:model.blur="message"></textarea>
                            @error('message')
                                <div id="message" class="text-danger mt-1g" style="color: crimson;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="button-outer">
                        <button class="btn btn-success">
                            Submit to get a call back!
                            <span class="icon-more-icon"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('components.alerts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</section>
