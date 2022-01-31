@if($wedding->gallery->count() > 0)
<section id="section-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="s2">Our Gallery</h2>
                <div class="small-border" style="background-size: cover;"></div>
            </div>
            <div class="col-md-12">
                <div class="de_tab tab_style_3 text-center">
                    <div class="de_tab_content">
                        <div class="masonry">
                            @foreach($wedding->gallery as $gallery)
                            <figure class="picframe mb20">
                                <a class="image-popup-gallery" href="{{asset('storage/media/'.$gallery->filename)}}">
                                    <span class="overlay-v">
                                        <i></i>
                                    </span>
                                </a>
                                <img src="{{asset('storage/media/'.$gallery->filename)}}" class="img-responsive img-rounded" alt="">
                            </figure>
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