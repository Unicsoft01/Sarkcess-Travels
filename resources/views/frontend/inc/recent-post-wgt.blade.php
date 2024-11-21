<div class="recent-post">
    <h3>Recent Posts</h3>
    <ul>
        @forelse ($posts->take(10) as $post)
            <li class="clearfix">
                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" wire:navigate>
                    <div class="img-block">
                        <img src="{{ Storage::url($post->thumbnail) }}" class="img-responsive" alt="">
                    </div>
                    <div class="detail">
                        <h4>
                            {{ Str::of(Str::limit($post->post_title, $limit = 35, $end = '...'))->headline }}
                        </h4>
                        <p>
                            <span class="icon-date-icon ico"></span>

                            <span>{!! date('D, d-M', strtotime($post->created_at)) !!}</span> {!! date('Y', strtotime($post->created_at)) !!}
                        </p>
                    </div>
                </a>
            </li>
        @empty
            <li>
                <p style="text-align: center; font-size: 15px; ">
                    Sorry No Post at the moment!, Please check back later!!!
                </p>
            </li>
        @endforelse
    </ul>
</div>
