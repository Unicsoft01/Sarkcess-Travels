<div style="background: rgb(237, 243, 235);">
    <section class="intro-sec padding-lg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-push-6 left-block">
                    <h2>
                        {{ Str::of($intro->section_title)->headline }}
                        <span>
                            {{ Str::of($intro->section_sub_title)->headline }}
                        </span>
                    </h2>
                    <p> 
                        {{ ucfirst($intro->description) }}
                    </p>
                    <div class="know-more-wrapper">
                        <a href="{{ route('about-us.frontend') }}" wire:navigate class="know-more">
                            <span class="icon-more-icon"></span>Read More
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-pull-6">
                    <div class="video-block">
                        <a href="https://www.youtube.com/" target="_blank" class="play-outer video">
                            <figure><img src="{{ url('/') }}/frontend/images/green-play-btn.png" alt="">
                            </figure>
                            <span>Play to know About us</span>
                        </a>
                        <div id="thumbnail_container"> <img src="{{ url('/') }}/frontend/images/about-video2.jpg"
                                id="thumbnail" class="img-responsive" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
