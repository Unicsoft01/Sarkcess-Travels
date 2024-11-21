<div>
    <div class="inner-banner blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1>
                            Study Destinations
                        </h1>
                        <p>
                            Where Will Your Education Take You?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="campus-tour campus-tour2 padding-lg "  style="background: rgb(207, 224, 202);">
        <div class="container">
            {{-- <h2><span>Our campus have a lot to offer for our students</span>Take a Campus Tour</h2> --}}
        </div>
        <ul class="gallery clearfix">
            @forelse ($countries as $country)
                <li style="border-radius: 4px;">
                    <div class="overlay">
                        <h3>
                            {{ Str::of($country->country)->headline }}
                        </h3>
                        <p>
                            {{ Str::of($country->short_note)->headline }}
                        </p>
                        {{-- <a class="galleryItem" href="#"> --}}
                            <span class="icon-enlarge-iconw"></span>
                        {{-- </a> --}}
                        <a href="{{ route('countries.show', [
                        'slug' => $country->slug]) }}" class="more">
                            <span class="icon-gallery-more-arrow"></span>
                        </a>
                    </div>
                    <figure>
                        <img src="{{ Storage::url($country->thumbnail) }}" class="img-responsive" alt="">
                    </figure>
                </li>
            @empty
                <li style="text-align: center; font-size: 18px; ">
                    Available for Application at the moment, Please check back later!
                </li>
            @endforelse

        </ul>
    </section>
</div>
