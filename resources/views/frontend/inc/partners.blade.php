<section class="logos">
    <div class="container">
        <ul class="owl-carousel clearfix">
            @foreach ($universities as $university)
                <li>
                    <a href="{{ route('universities.show', $university->slug) }}">
                        <img src="{{ Storage::url($university->thumbnail) }}" class="img-responsive" alt="{{  $university->university }}"  title="{{  $university->university }}" >
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
