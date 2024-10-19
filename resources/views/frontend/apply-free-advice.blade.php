<section class="login-wrapper register">
    <div class="inner">
        <div class="regiter-inner">
            <div class="login-logo">
                <a href="{{ url('/') }}/" wire:navigate>
                    <img src="{{ url('/') }}/frontend/images/login-logo.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="head-block">
                <h1>
                    Apply Now <br>
                    <small style="color: rgb(0, 78, 0)">Get free advice on your next choice of course!</small>
                </h1>
            </div>
            <div class="cnt-block">
                <form class="form-outer">
                    <div class="row">
                        <div class="col-sm-6">
                            <input name="fullname" type="text" placeholder="Enter your Full Name" autofocus >
                        </div>
                        <div class="col-sm-6">
                            <input name="email" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input name="country" type="text" placeholder="Enter a Country name">
                        </div>
                        <div class="col-sm-6">
                            <input name="country-code" type="text" placeholder="zip" class="country-code">
                            <input name="phone" type="text" placeholder="E.g 09077957088" class="phone-no">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 clearfix">
                            <textarea name="message" id="message" placeholder="Body" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="button-outer">
                        <button class="btn btn-success">Submit to get a call back! <span
                                class="icon-more-icon"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
