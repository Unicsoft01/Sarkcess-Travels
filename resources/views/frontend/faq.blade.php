<div>
    <div class="inner-banner blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1>Faq</h1>
                        <p>Find Answers to Common Questions About Studying Abroad and Our Services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="faq-wrapper faq2 padding-lg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="search-block clearfix">
                        <input name="Search" placeholder="Search Now" type="text">
                        <button class="search"><span class="icon-search-icon"></span></button>
                    </div>
                </div>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @forelse ($faqs as $faq)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading{{ $faq->id }}">
                            <h4 class="panel-title"> <a class="@if ($loop->iteration != 1) collapsed @endif"
                                    role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse{{ $faq->id }}" aria-expanded="true"
                                    aria-controls="collapse{{ $faq->id }}"> {{ $faq->question }} </a> </h4>
                        </div>
                        <div id="collapse{{ $faq->id }}"
                            class="panel-collapse collapse @if ($loop->iteration == 1) in @endif" role="tabpanel"
                            aria-labelledby="heading{{ $faq->id }}">
                            <div class="panel-body">
                                <p>
                                    {{ $faq->answer }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Wondering why
                                    this page is empty? </a> </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>
                                    Contact our Officials
                                </p>
                            </div>
                        </div>
                    </div>
                @endforelse


            </div>

        </div>
    </section>

</div>
