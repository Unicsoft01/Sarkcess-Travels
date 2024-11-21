<section class="logos">
    @php
        use App\Models\Universities;

        $universities = Universities::latest()->get();
    @endphp
    <div class="container">
        <ul class="owl-carousel clearfix">
            @foreach ($universities as $university)
                <li>
                    <a href="/countries" wire:navigate>
                        <img src="{{ Storage::url($university->thumbnail) }}" class="img-responsive" alt="">
                    </a>
                </li>
            @endforeach

            {{-- <li>
                <a href="#">
                    <img src="{{ url('/') }}/frontend/images/logo2.jpg" class="img-responsive" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ url('/') }}/frontend/images/logo3.jpg" class="img-responsive" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ url('/') }}/frontend/images/logo4.jpg" class="img-responsive" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ url('/') }}/frontend/images/logo5.jpg" class="img-responsive" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ url('/') }}/frontend/images/logo6.jpg" class="img-responsive" alt="">
                </a>
            </li> --}}
        </ul>
    </div>
</section>
