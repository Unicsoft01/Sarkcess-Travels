<section class="how-apply padding-lg">
    <div class="container">
        <h2>
            <span>
                {{ $how2apply->section->section_sub_title }}
            </span>
            {{ $how2apply->section->section_title }}
        </h2>
        <ul class="row">
            <li class="col-sm-4">
                <div class="icon-block"> <span class="num">1</span> <img
                        src="{{ url('/') }}/frontend/images/registration-ico.png" alt=""></div>
                <h3>{{ $how2apply->step1 }}</h3>
                <p class="text-justified">{{ Str::limit($how2apply->description1, $limit = 600, $end = '...') }}</p>
            </li>
            <li class="col-sm-4 active">
                <div class="icon-block"> <span class="num">2</span> <img
                        src="{{ url('/') }}/frontend/images/doc-ico.png" alt=""></div>
                <h3>{{ $how2apply->step2 }}</h3>
                <p class="text-justified">{{ Str::limit($how2apply->description2, $limit = 600, $end = '...') }}</p>
            </li>
            <li class="col-sm-4 ">
                <div class="icon-block"> <span class="num">3</span> <img
                        src="{{ url('/') }}/frontend/images/get-start-ico.png" alt=""></div>
                <h3>{{ $how2apply->step3 }}</h3>
                <p class="text-justified">{{ Str::limit($how2apply->description3, $limit = 600, $end = '...') }}</p>
            </li>
        </ul>
        <div class="button-wrapper">
            <a href="{{ route('apply-free.frontend') }}" wire:navigate class="btn btn-success">
                apply now
                <span class="icon-more-icon"></span>
            </a>
        </div>
    </div>
</section>
