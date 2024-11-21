<div>

    <div class="inner-banner contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-9">
                    <div class="content">
                        <h1>Contact Us</h1>
                        <p>
                            Get in Touch with Us!, need help with the application process, or want to know more about
                            our services. Reach out to us through any of the methods below!"
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3"> <a href="{{ route('courses.index') }}" wire:navigate
                        class="apply-online clearfix">
                        <div class="left clearfix"> <span class="icon"><img
                                    src="{{ url('/') }}/frontend/images/apply-online-sm-ico.png"
                                    class="img-responsive" alt=""></span> <span class="txt">Apply Now</span>
                        </div>
                        <div class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </a></div>
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <section class="form-wrapper padding-lg">
        <div class="container">
            <form id="ContactForm">
                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="first_name" type="text" placeholder="First Name">
                    </div>
                    <div class="col-sm-6">
                        <input name="last_name" type="text" placeholder="Last Name">
                    </div>
                </div>
                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="company" type="text" placeholder="Company">
                    </div>
                    <div class="col-sm-6">
                        <input name="phone_number" type="text" placeholder="Phone Number">
                    </div>
                </div>
                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="business_email" type="text" placeholder="Business Email">
                    </div>
                    <div class="col-sm-6">
                        <input name="job_title" type="text" placeholder="Job Tittle">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Submit to get a callback <span class="icon-more-icon"></span></button>
                        <div class="msg"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Google Map -->
    <section class="google-map">
        <div id="map"><iframe src="https://snazzymaps.com/embed/21734" style="border:none;"></iframe></div>
        <div class="container">
            <div class="contact-detail">
                <div class="address">
                    <div class="inner">
                        <h3>{{ Str::of($setting->name)->headline }}</h3>
                        <p>{{ Str::of($setting->description)->headline }}</p>
                    </div>

                    <div class="inner">
                        <h3>{{ Str::of($setting->phone) }}</h3>
                    </div>
                    <div class="inner"> <a
                            href="mailto:{{ Str::of($setting->email) }}">{{ Str::of($setting->email) }}</a> </div>
                </div>
                <div class="contact-bottom">
                    <ul class="follow-us clearfix">

                        <li>
                            <a target="_blank" href="{{ $socialMedia->facebook }}">
                                <i class="fa fa-facebook" aria-hidden="true">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $socialMedia->twitter }}">
                                <i class="fa fa-twitter" aria-hidden="true">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $socialMedia->linkedin }}">
                                <i class="fa fa-linkedin" aria-hidden="true">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $socialMedia->insta }}">
                                <i class="fa fa-instagram" aria-hidden="true">
                                </i>
                            </a>
                        </li>
                </div>
            </div>
    </section>

    <livewire:frontend.inc.have-questions />
</div>
