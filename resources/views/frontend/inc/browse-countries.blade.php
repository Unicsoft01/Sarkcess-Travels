<div>
    <div class="browse_by_countries">
        <div class="container">
            <h2 class="section_title gradient"> 
                <span> Browse by countries </span>
            </h2>
            <p class="section_sub_title">Where do you want to study abroad?</p>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{ route('countries.show', ['slug'=> 'study-in-usa']) }}">
                        <div class="box">
                            <img width="530" height="355" src="https://www.jeduka.com/images_v4/usa-bg.webp"
                                class="bg_img" alt="USA">
                            <div class="content">
                                <h3>USA</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{ route('countries.show', ['slug'=> 'study-in-canada']) }}">
                        <div class="box countries">
                            <img width="530" height="355" src="https://www.jeduka.com/images_v4/canada-bg.webp"
                                class="bg_img" alt="Canada">
                            <div class="content">
                                <h3>Canada</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{ route('countries.show', ['slug'=> 'study-in-france']) }}">
                        <div class="box countries">
                            <img width="530" height="355" src="https://www.jeduka.com/images_v4/France-bg.webp"
                                class="bg_img" alt="France">
                            <div class="content">
                                <h3>France</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{ route('countries.show', ['slug'=> 'study-in-Germany']) }}">
                        <div class="box countries">
                            <img width="530" height="355"
                                src="https://www.jeduka.com/images_v4/Germany-bg.webp" class="bg_img"
                                alt="Germany">
                            <div class="content">
                                <h3>Germany</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{ route('countries.show', ['slug'=> 'study-in-Netherlands']) }}">
                        <div class="box countries">
                            <img width="530" height="355"
                                src="https://www.jeduka.com/images_v4/Netherlands-bg.webp" class="bg_img"
                                alt="Netherlands">
                            <div class="content">
                                <h3>Netherlands</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{ route('countries.show', ['slug'=> 'study-in-uk']) }}">
                        <div class="box countries">
                            <img width="530" height="355" src="https://www.jeduka.com/images_v4/uk-bg.webp"
                                class="bg_img" alt="UK">
                            <div class="content">
                                <h3> UK </h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-100 btn_area text-center">
                    <a href="{{ route('countries.index') }}" class="btn-2 view_all_btn btn btn-success">View
                        All Countries
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
