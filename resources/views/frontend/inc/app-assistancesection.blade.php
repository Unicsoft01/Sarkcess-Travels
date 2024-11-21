<div class="latest_news">
    <div class="container">
        <h2 class="section_title gradient">
            <span>
                {{ Str::limit($assistance[0]->section->section_title, $limit = 34, $end = '...') }}
            </span>

        </h2>
        <p class="section_sub_title"></p>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="round_box">
                    <a href="{{ route('sop.frontend', ['sop' => $assistance[0]->slug ]) }}" wire:navigate>
                        <img width="88" height="67"
                            src="https://www.jeduka.com/storage/application_guide/1601467473_sop.png" alt="SOP">
                        <h4>
                            {{ $assistance[0]->short_name }}
                        </h4>
                        <p>{{ $assistance[0]->fullname }}</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="round_box">
                    <a href="{{ route('sop.frontend', ['sop' => $assistance[1]->slug ]) }}">
                        <img width="88" height="67"
                            src="https://www.jeduka.com/storage/application_guide/1601467455_lor.png" alt="LOR">
                        <h4>
                            {{ $assistance[1]->short_name }}
                        </h4>
                        <p>{{ $assistance[1]->fullname }}</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="round_box">
                    <a href="{{ route('sop.frontend', ['sop' => $assistance[2]->slug ]) }}">
                        <img width="88" height="67"
                            src="https://www.jeduka.com/storage/application_guide/1601467417_cv.png" alt="CV">
                        <h4>
                            {{ $assistance[2]->short_name }}
                        </h4>
                        <p>{{ $assistance[2]->fullname }}</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="round_box">
                    <a href="{{ route('sop.frontend', ['sop' => $assistance[3]->slug ]) }}">
                        <img width="88" height="67"
                            src="https://www.jeduka.com/storage/application_guide/1601467498_Student_visa.png"
                            alt="Visa">
                        <h4>
                            {{ $assistance[3]->short_name }}
                        </h4>
                        <p>{{ $assistance[3]->fullname }}</p>
                    </a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="w-100 btn_area text-center" style="margin-top: 22px;">
                <a href="/countries" wire:navigate class="btn-2 apply_btn btn btn-success">Apply
                    Now</a>
            </div>
        </div>
    </div>
</div>
