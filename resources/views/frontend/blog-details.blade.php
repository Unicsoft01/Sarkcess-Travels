<div>
    <div class="inner-banner blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1>
                            Blog Details
                        </h1>
                        <p>Empowering Students with Knowledge for a Seamless International Study Experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container blog-wrapper padding-lg">
        <div class="row">
            <!-- Start Left Column -->

            <div class="col-sm-8 blog-left">
                <ul class="blog-listing detail">
                    <li> <img src="{{ Storage::url($post->thumbnail) }}" class="img-responsive" alt="">
                        <h2>
                            {{ Str::of($post->post_title)->headline }}
                        </h2>
                        <ul class="post-detail">
                            <li><span class="icon-date-icon ico"></span>
                                <span class="bold">
                                    {!! date('D, d-M', strtotime($post->created_at)) !!}
                                </span>
                                {!! date('Y', strtotime($post->created_at)) !!}
                            </li>

                        </ul>
                        <p style="text-align: justify;">
                            {!! $post->post !!}
                        </p>
                    </li>
                </ul>
                <ul class="follow-us clearfix">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <!-- End Left Column -->

            <!-- Start Right Column -->
            <div class="col-sm-4">
                <div class="blog-right">
                    <div class="search-block clearfix">
                        <input name="Search" type="text" placeholder="Search">
                        <button class="search"><span class="icon-search-icon"></span></button>
                    </div>
                    {{-- <div class="category">
                        <livewire:frontend.inc.apply-now :id="$post->post_id" />
                    </div> --}}
                    {{-- recent posts --}}
                    <livewire:frontend.inc.recent-post-wgt />

                </div>
            </div>
            <!-- End Right Column -->
        </div>
    </div>
</div>
