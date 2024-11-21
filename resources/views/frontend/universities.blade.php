<div>
    <div class="inner-banner blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        {{-- <h1>Top Universities for International Students</h1> --}}
                        <p>Top Universities for International Students</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="popular-cources padding-lg">
        <div class="container">
            {{-- 
{"university_id":1,"university":"buk danyigbaddsdsdw","thumbnail":"unversities\/Miss_Rita_Ep_5_page-0021.jpg","slug":"buk-danyigbaddsdsdw","country_id":2,"post_id":5,"created_at":"2024-10-23T16:13:29.000000Z","updated_at":"2024-10-23T16:13:29.000000Z"}
 --}}
            <ul class="row courses-list">
                @forelse ($universities as $university)
                    <li class="col-sm-6 col-md-3" style="margin-bottom: 25px;">
                        <div class="inner">
                            <figure>
                                <img src="{{ Storage::url($university->thumbnail) }}" alt="" width=""
                                    height="300">
                            </figure>
                            <div class="cnt-block">
                                <a href="{{ route('universities.show', $university->slug) }}">
                                    <div class="duration">
                                        <span class="year" style="color: white;">Apply</span>
                                        <span class="txt" style="color: white;">Now</span>

                                    </div>
                                </a>
                                <h4>
                                    {{ $university->university }}
                                </h4>
                                <p>
                                    {{ Str::limit($university->aboutUniversity->post, $limit = 40, $end = '...') }}
                                </p>
                            </div>
                        </div>
                    </li>
                @empty
                    <h2>
                        Sorry! something is missing here, check back later!!
                    </h2>
                @endforelse


            </ul>
        </div>
    </section>
</div>
