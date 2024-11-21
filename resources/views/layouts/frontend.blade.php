<!doctype html>
<html lang="en">
@php
    $socialMedia = App\Models\MediaHandles::find(1);
    $setting = App\Models\Settings::find(1);
@endphp

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @livewireStyles

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/frontend/images/favicon.ico">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS -->
    <link data-navigate-once href="{{ url('/') }}/frontend/css/reset.css" rel="stylesheet">
    <link data-navigate-once href="{{ url('/') }}/frontend/css/fonts.css" rel="stylesheet">
    <link data-navigate-once href="{{ url('/') }}/frontend/assets/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">
    <link data-navigate-once href="{{ url('/') }}/frontend/assets/select2/css/select2.min.css" rel="stylesheet">
    <link data-navigate-once href="{{ url('/') }}/frontend/assets/font-awesome/css/font-awesome.min.css"
        rel="stylesheet">
    <link data-navigate-once href="{{ url('/') }}/frontend/assets/magnific-popup/css/magnific-popup.css"
        rel="stylesheet">
    <link data-navigate-once href="{{ url('/') }}/frontend/assets/iconmoon/css/iconmoon.css" rel="stylesheet">
    <link data-navigate-once href="{{ url('/') }}/frontend/assets/owl-carousel/css/owl.carousel.min.css"
        rel="stylesheet">
    <link data-navigate-once href="{{ url('/') }}/frontend/css/animate.css" rel="stylesheet">
    <link data-navigate-once href="{{ url('/') }}/frontend/css/custom.css" rel="stylesheet">
    <link data-navigate-once href="{{ url('/') }}/frontend/css/styles.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!-- Start Header top Bar -->
        <div class="header-top">
            <div class="container clearfix">
                <ul class="follow-us hidden-xs">
                    <li><a target="_blank" href="{{ $socialMedia->twitter }}"><i class="fa fa-twitter"
                                aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="{{ $socialMedia->facebook }}"><i class="fa fa-facebook-official"
                                aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="{{ $socialMedia->gmail }}"><i class="fa fa-google-plus"
                                aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="{{ $socialMedia->youtube }}"><i class="fa fa-youtube-play"
                                aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="{{ $socialMedia->insta }}"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a></li>
                </ul>
                <div class="right-block clearfix">
                    <ul class="top-nav hidden-xs">
                        {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
                        <li><a href="{{ route('apply-free.frontend') }}" wire:navigate>Request for free Advice</a></li>
                        <li><a href="{{ route('blog.frontend') }}" wire:navigate>Blog</a></li>
                        <li><a href="{{ route('about-us.frontend') }}" wire:navigate>About Us</a></li>
                    </ul>
                    <div class="lang-wrapper">
                        <div class="select-lang">
                            <div class="" style="padding: 10px 4px 0px 0px; color: rgb(23, 164, 59);">
                                <span class="currency_select">
                                    Enquiries
                                </span>
                                <a href="mailto:{{ $setting->email }}">
                                    {{ $setting->email }}
                                </a>
                            </div>
                        </div>
                        <div class="select-lang2">
                            <select class="custom_select">
                                <option value="en">English</option>
                                <option value="fr">French</option>
                                <option value="de">German</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header top Bar -->
        <!-- Start Header Middle -->
        <div class="container header-middle">
            <div class="row">
                <span class="col-xs-6 col-sm-3">
                    <a href="{{ route('welcome') }}">
                        {{-- <img
                            src="{{ url('/') }}/frontend/images/logo.png" class="img-responsive"
                            alt=""> --}}
                        <img src="{{ Storage::url($setting->logo_light) }}" class="img-responsive" alt="">

                    </a>
                </span>
                <div class="col-xs-6 col-sm-3"></div>
                <div class="col-xs-6 col-sm-9">
                    <div class="contact clearfix">
                        <ul class="hidden-xs">
                            <li>
                                <span>Enquiries</span>
                                <a href="mailto:{{ $setting->email }}">
                                    {{ $setting->email }}
                                </a>
                            </li>
                            {{-- <li> <span>Toll Free</span> 1800 000 0000 </li> --}}
                        </ul>
                        <a href="{{ route('apply-free.frontend') }}" wire:navigate class="login">Student Support <span
                                class="icon-more-icon"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        <!-- Start Navigation -->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse"
                        class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle
                            navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <form class="navbar-form navbar-right">
                        <input type="text" placeholder="Search Now" class="form-control">
                        <button class="search-btn"><span class="icon-search-icon"></span></button>
                    </form>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ route('welcome') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('countries.index') }}" wire:navigate>
                                Countries
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('courses.index') }}" wire:navigate>
                                Universities
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('about-us.frontend') }}">
                                About Us
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('contact-us.frontend') }}" wire:navigate>
                                Contact Us
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('faq.frontend') }}" wire:navigate>
                                FAQs
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>

    @if (route('welcome') == url()->current())
        @php
            $sliders = App\Models\SectionTexts::get();
            $slider1 = $sliders->where('section_id', '=', 1)->first();
            $slider2 = $sliders->where('section_id', '=', 2)->first();
            $slider3 = $sliders->where('section_id', '=', 3)->first();
        @endphp
        <!-- ** Banner Carousel ** -->
        <div class="banner-outer">
            <div class="banner-slider">
                <div class="slide1">
                    <div class="container">
                        <div class="content animated fadeInRight">
                            <div class="fl-right">
                                <h1 class="animated fadeInRight">
                                    {{ $slider1->section_sub_title }}
                                    <span class="animated fadeInRight">
                                        {{ $slider1->section_title }}
                                    </span>
                                </h1>
                                <p class="animated fadeInRight">
                                    {{ $slider1->description }}
                                </p>
                                <a href="/apply-free" class="btn btn-success animated fadeInRight">Apply Now! <span
                                        class="icon-more-icon"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="slide2">
                    <div class="container">
                        <div class="content">
                            <h1 class="animated fadeInUp">
                                {{ $slider2->section_title }}
                            </h1>
                            <p class="animated fadeInUp">
                                {{ $slider2->description }}
                            </p>
                            <a href="about.html" class="btn btn-success animated fadeInUp">Know More <span
                                    class="icon-more-icon"></span></a>
                            <a href="gallery.html" class="btn white animated fadeInUp hidden-xs">Contact Us <span
                                    class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </div>
                <div class="slide3">
                    <div class="container">
                        <div class="content animated fadeInLeft">
                            <h1 class="animated fadeInLeft">
                                {{ $slider3->section_title }}
                            </h1>
                            <p class="animated fadeInLeft">
                                {{ $slider3->description }}
                            </p>
                            <a href="{{ route('apply-free.frontend') }}" wire:navigate
                                class="btn btn-success animated fadeInLeft">Request Free counselling! <span
                                    class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    @endif

    {{ $slot }}

    <!-- ==============================================
    ** Footer **
    =================================================== -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="container">
            <div class="row row1">
                <div class="col-sm-9 clearfix">
                    <div class="foot-nav">
                        <h3>About US</h3>
                        <ul>
                            <li><a href="#">{{ $setting->name }} Group of Institutions</a></li>
                            <li><a href="#">Our Institutes and Universities</a></li>
                            <li><a href="#">Management Team</a></li>
                            <li><a href="#">Approval and Recognition</a></li>
                            <li><a href="#">Evaluation & Assessments</a></li>
                        </ul>
                    </div>
                    <div class="foot-nav">
                        <h3>Courses</h3>
                        <ul>
                            <li><a href="#">2 Year Online MBA General</a></li>
                            <li><a href="#">Certificate in HRM</a></li>
                            <li><a href="#">Certificate in Marketing</a></li>
                            <li><a href="#">Certificate in Finance</a></li>
                            <li><a href="#">Corporate Programs</a></li>
                        </ul>
                    </div>
                    <div class="foot-nav">
                        <h3>Why {{ $setting->name }}</h3>
                        <ul>
                            <li><a href="#">Introduction</a></li>
                            <li><a href="#">Learn Everywhere</a></li>
                            <li><a href="#">Modern Curriculum</a></li>
                            <li><a href="#">Placement Assistance</a></li>
                            <li><a href="#">Eligibility</a></li>
                        </ul>
                    </div>
                    <div class="foot-nav">
                        <h3>Learning Experience</h3>
                        <ul>
                            <li><a href="#">Course Preparations</a></li>
                            <li><a href="#">Guided lessons</a></li>
                            <li><a href="#">Interactive Practice</a></li>
                            <li><a href="#">Virtual Classroom</a></li>
                            <li><a href="#">Peer Learning</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-logo hidden-xs"><a href="{{ url('/') }}">
                            <img src="{{ Storage::url($setting->logo_dark) }}" class="img-responsive"
                                alt="">
                        </a>
                    </div>
                    <p>© {{ $setting->year }} <span>{{ $setting->name }}</span>. All rights reserved</p>
                    <ul class="terms clearfix">
                        <li><a href="terms.html">TERMS OF USE</a></li>
                        <li><a href="privacy.html">PRIVACY POLICY</a></li>
                        <li><a href="#">SITEMAP</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <!-- Start Footer Bottom -->
        <div class="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="connect-us">
                            <h3>Connect with Us</h3>
                            <ul class="follow-us clearfix">
                                <li>
                                    <a target="_blank" href="{{ $socialMedia->facebook }}">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="{{ $socialMedia->twitter }}">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="{{ $socialMedia->linkedin }}"><i class="fa fa-linkedin"
                                            aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="{{ $socialMedia->gmail }}"><i class="fa fa-google-plus"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="{{ $socialMedia->youtube }}">
                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="{{ $socialMedia->insta }}">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="subscribe">
                            <h3>Subscribe with Us</h3>
                            <!-- Begin MailChimp Signup Form -->
                            <div id="mc_embed_signup">
                                <form action="#" method="post" id="mc-embedded-subscribe-form"
                                    name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <input type="email" value="" name="EMAIL" class="email"
                                            id="mce-EMAIL" placeholder="enter your email address" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_cd5f66d2922f9e808f57e7d42_ec6767feee"
                                                tabindex="-1" value="">
                                        </div>
                                        <div class="clear">
                                            <input type="submit" value="Subscribe" name="subscribe"
                                                id="mc-embedded-subscribe" class="button">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                    </div>
                    {{-- <div class="col-sm-4">
                        <div class="instagram">
                            <h3>@INSTAGRAM</h3>
                            <ul class="clearfix">
                                <li><a href="#">
                                        <figure><img src="{{ url('/') }}/frontend/images/insta-img1.jpg"
                                                class="img-responsive" alt=""></figure>
                                    </a></li>
                                <li><a href="#">
                                        <figure><img src="{{ url('/') }}/frontend/images/insta-img2.jpg"
                                                class="img-responsive" alt=""></figure>
                                    </a></li>
                                <li><a href="#">
                                        <figure><img src="{{ url('/') }}/frontend/images/insta-img3.jpg"
                                                class="img-responsive" alt=""></figure>
                                    </a></li>
                                <li><a href="#">
                                        <figure><img src="{{ url('/') }}/frontend/images/insta-img4.jpg"
                                                class="img-responsive" alt=""></figure>
                                    </a></li>
                                <li><a href="#">
                                        <figure><img src="{{ url('/') }}/frontend/images/insta-img5.jpg"
                                                class="img-responsive" alt=""></figure>
                                    </a></li>
                                <li><a href="#">
                                        <figure><img src="{{ url('/') }}/frontend/images/insta-img6.jpg"
                                                class="img-responsive" alt=""></figure>
                                    </a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>

    <!-- Scroll to top -->
    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

    @livewireScripts

    <!-- Optional JavaScript -->
    <script data-navigate-once src="{{ url('/') }}/frontend/js/jquery.min.js"></script>
    <script data-navigate-once src="{{ url('/') }}/frontend/assets/bootstrap/js/bootstrap.min.js"></script>
    <script data-navigate-once src="{{ url('/') }}/frontend/assets/select2/js/select2.min.js"></script>
    <script data-navigate-once src="{{ url('/') }}/frontend/assets/matchHeight/js/matchHeight-min.js"></script>
    <script data-navigate-once src="{{ url('/') }}/frontend/assets/bxslider/js/bxslider.min.js"></script>
    <script data-navigate-once src="{{ url('/') }}/frontend/assets/waypoints/js/waypoints.min.js"></script>
    <script data-navigate-once src="{{ url('/') }}/frontend/assets/counterup/js/counterup.min.js"></script>
    <script data-navigate-once src="{{ url('/') }}/frontend/assets/magnific-popup/js/magnific-popup.min.js"></script>
    <script data-navigate-once src="{{ url('/') }}/frontend/assets/owl-carousel/js/owl.carousel.min.js"></script>
    <script data-navigate-once src="{{ url('/') }}/frontend/js/modernizr.custom.js"></script>
    <script data-navigate-once src="{{ url('/') }}/frontend/js/custom.js"></script>
</body>

</html>
