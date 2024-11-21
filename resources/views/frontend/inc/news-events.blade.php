<div>
    @php
        $sectionTexts = App\Models\SectionTexts::find(10);
    @endphp
    <section class="news-events padding-lg">
        <div class="container">
            <h2>
                <span>
                    {{ $sectionTexts->section_sub_title }}
                </span>
                {{ $sectionTexts->section_title }}
            </h2>
            <ul class="row cs-style-3">
                @foreach ($posts as $post)
                    <li class="col-sm-4">
                        <div class="inner">
                            <figure> 
                                <img src="{{ Storage::url($post->thumbnail) }}"
                                    class="img-responsive">
                                <figcaption>
                                    <div class="cnt-block"> <a href="{{ route('blog.show', ['slug'=> $post->slug]) }}"  wire:navigate class="plus-icon">+</a>
                                        <h3>
                                            {{ Str::of(Str::limit($post->post_title, $limit = 60, $end = '...'))->headline }}
                                        </h3>
                                        <div class="bottom-block clearfix">
                                            <div class="date">
                                                <div class="icon"><span class="icon-calander-icon"></span></div>
                                                <span>
                                                    {!! date('D, d-M', strtotime($post->created_at)) !!}
                                                </span> 
                                                {!! date('Y', strtotime($post->created_at)) !!}
                                            </div>
                                            <div class="comment">
                                                <div class="icon"><span class="icon-chat-icon"></span></div>
                                                {{-- <span>24</span> comments --}}
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                @endforeach
                {{-- <li class="col-sm-4">
                    <div class="inner">
                        <figure> <img src="{{ url('/') }}/frontend/images/new-event-img2.jpg"
                                class="img-responsive">
                            <figcaption>
                                <div class="cnt-block"> <a href="#" class="plus-icon">+</a>
                                    <h3>We have added new features to Sarkcess Consults</h3>
                                    <div class="bottom-block clearfix">
                                        <div class="date">
                                            <div class="icon"><span class="icon-calander-icon"></span></div>
                                            <span>14 Feb</span> 2017
                                        </div>
                                        <div class="comment">
                                            <div class="icon"><span class="icon-chat-icon"></span></div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </li>
                <li class="col-sm-4">
                    <div class="inner">
                        <figure> <img src="{{ url('/') }}/frontend/images/new-event-img3.jpg"
                                class="img-responsive">
                            <figcaption>
                                <div class="cnt-block"> <a href="#" class="plus-icon">+</a>
                                    <h3>We have added new features to Sarkcess Consults</h3>
                                    <div class="bottom-block clearfix">
                                        <div class="date">
                                            <div class="icon"><span class="icon-calander-icon"></span></div>
                                            <span>14 Feb</span> 2017
                                        </div>
                                        <div class="comment">
                                            <div class="icon"><span class="icon-chat-icon"></span></div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </li> --}}
            </ul>
            <div class="know-more-wrapper">
                <a href="{{ route('blog.frontend') }}" class="know-more">
                    More Post
                    <span class="icon-more-icon"></span>
                </a>
            </div>
        </div>
    </section>
</div>
