<div>
    <div class="inner-banner blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1>{{ $post->short_name }}</h1>
                        <p>{{ $post->fullname }}</p>
                        {{-- {{ $post }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
        $links = App\Models\AdmissionAssistance::get();

        $link1 = $links->where('post_id', '=', 1)->first();
        $link2 = $links->where('post_id', '=', 2)->first();
        $link3 = $links->where('post_id', '=', 3)->first();
        $link4 = $links->where('post_id', '=', 4)->first();
    @endphp
    <section class="generic-wrapper">
        <div class="container">

            <!-- Start Tab -->
            <div class="row padding-lg">
                <div class="col-sm-12">
                    <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                        <ul class="nav nav-tabs course-tab" id="myTabs" role="tablist">

                            <li role="presentation"
                                class="
                            @if (route('sop.frontend', ['sop' => $post->slug]) == url()->current()) active @endif">
                                <a href="{{ route('sop.frontend', ['sop' => $link1->slug]) }}" wire:navigate>
                                    <span class="icon-curriculam-icon"></span>
                                    <div class="block">
                                        {{ $link1->short_name }}  
                                    </div>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="{{ route('sop.frontend', ['sop' => $link2->slug]) }}" wire:navigate>
                                    <span class="icon-schedule-icon"></span>
                                    <div class="block">{{ $link2->short_name }}</div>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="{{ route('sop.frontend', ['sop' => $link3->slug]) }}" wire:navigate
                                    role="tab" id="semester-tab" data-toggle="tab" aria-controls="semester"
                                    aria-expanded="false">
                                    <span class="icon-semester-icon"></span>
                                    <div class="block">{{ $link3->short_name }}</div>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('sop.frontend', ['sop' => $link4->slug]) }}" wire:navigate> <span
                                        class="icon-parents-icon"></span>
                                    <div class="block">{{ $link4->short_name }}</div>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active in" role="tabpanel" id="curriculam"
                                aria-labelledby="curriculam-tab" style="text-align: justify;">
                                <p>
                                    {!! $post->assistancePost->body !!}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab -->
            <hr>
        </div>
    </section>
</div>
