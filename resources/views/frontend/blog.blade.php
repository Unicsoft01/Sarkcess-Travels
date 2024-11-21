<div>
    <div class="inner-banner blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        {{-- {{ $posts }} --}}
                        <h1>Blog</h1>
                        <p>
                            Insights, Tips, and Resources to Simplify Your Journey to Studying Abroad
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container blog-wrapper padding-lg">
        <div class="row">
            <!-- Start Left Column -->
            <div class="col-sm-8 blog-left">
                <ul class="blog-listing">
                    @forelse ($posts as $post)
                        <li>
                            <img src="{{ Storage::url($post->thumbnail) }}" class="img-responsive" alt="">
                            <h2>
                                {{ Str::of($post->post_title)->headline }}
                            </h2>
                            <ul class="post-detail">
                                <li>
                                    <span class="icon-date-icon ico"></span>
                                    <span class="bold">
                                        {!! date('D, d-M', strtotime($post->created_at)) !!}
                                    </span> 
                                    {!! date('Y', strtotime($post->created_at)) !!}
                                </li>
                                <li>Posted By :
                                    <span class="bold">
                                        {{ $post->user->name }}
                                    </span>
                                </li>
                                {{-- <li>
                                    <span class="icon-chat-icon ico"></span>
                                    <span class="bold">14</span> Comments
                                </li>
                                <li>
                                    <span class="label">Software</span>
                                </li> --}}
                            </ul>
                            <p style="text-align: justify;">
                                {{-- {!! Str::limit($post->post, $limit = 380, $end = '...') !!} --}}
                                {{ Str::of(Str::limit($post->post, $limit = 380, $end = '...'))->stripTags(); }}
                            </p>
                            <a href="{{ route('blog.show', ['slug'=> $post->slug]) }}" class="read-more" wire:navigate>
                                <span class="icon-play-icon"></span>
                                Read More
                            </a>
                        </li>
                    @empty
                        <li>
                            <p style="text-align: center; font-size: 18px; ">
                                Sorry No Post at the moment!, Please check back later!!!
                            </p>
                        </li>
                    @endforelse

                </ul>
                {{-- <ul class="pagination">
                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left"
                                    aria-hidden="true"></i> Back</span> </a> </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next <i class="fa fa-angle-right"
                                    aria-hidden="true"></i></span> </a> </li>
                </ul> --}}
            </div>
            <!-- End Left Column -->

            <!-- Start Right Column -->
            <div class="col-sm-4">
                <div class="blog-right">
                    <div class="search-block clearfix">
                        <input name="Search" type="text" placeholder="Search">
                        <button class="search"><span class="icon-search-icon"></span></button>
                    </div>
                    {{-- categories --}}

                    {{-- recent posts --}}
                    <livewire:frontend.inc.recent-post-wgt :posts="$posts" />
                    {{-- tags --}}
                </div>
            </div>
            <!-- End Right Column -->
        </div>
    </div>
</div>
