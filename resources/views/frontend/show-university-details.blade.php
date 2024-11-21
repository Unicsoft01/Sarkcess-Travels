<div>
    <div class="inner-banner blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1>
                            {{ Str::of($about->university)->headline }}
                        </h1>
                        <p>Your Guide to Studying in {{ Str::of($about->university)->headline }}.</p>
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
                    <li> <img src="images/blog-detail-img.jpg" class="img-responsive" alt="">
                        <h2>
                            {{ Str::of($about->university)->headline }}
                        </h2>
                        <ul class="post-detail">
                            <li><span class="icon-date-icon ico"></span>
                                <span class="bold">
                                    {!! date('D, d-M', strtotime($about->created_at)) !!}
                                </span>
                                {!! date('Y', strtotime($about->created_at)) !!}
                            </li>

                        </ul>
                        <p style="text-align: justify;">
                            {{ $about->aboutUniversity->post }}
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

                    <div class="category">
                        <livewire:frontend.inc.apply-now :id="$about->university_id" />
                    </div>

                </div>
            </div>
            <!-- End Right Column -->
        </div>
    </div>
</div>
