@if($wedding->gallery->count() > 0)
<section id="section-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Our Gallery</h1>
                <div class="spacer-single"></div>
            </div>

            <div class="col-md-12">
                <div class="de_tab tab_style_3 text-center">
                    <div class="de_tab_content">
                        <div class="row">
                            @foreach($wedding->gallery as $gallery)
                            <div class="col-sm-6 col-md-4 text-center mb10">
                                <figure class="picframe img-rounded mb20">
                                    <a class="image-popup-gallery" href="{{asset('storage/media/'.$gallery->filename)}}">
                                        <span class="overlay-v">
                                            <i></i>
                                        </span>
                                    </a>
                                    <img src="{{asset('storage/media/'.$gallery->filename)}}" class="img-responsive img-rounded" alt="">
                                </figure>
                            </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endif