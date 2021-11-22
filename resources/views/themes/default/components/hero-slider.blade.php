<section id="section-hero" class="full-height relative z1 owl-slide-wrapper no-top no-bottom text-light" data-stellar-background-ratio=".2">
    <div class="owl-slider-nav">
        <div class="next"></div>
        <div class="prev"></div>
    </div>
    <div class="center-y fadeScroll relative" data-scroll-speed="4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="spacer-single"></div>
                        <div class="col-md-5 text-right text-center-sm relative">
                            <h2 class="name">{{$wedding->calon_wanita}}</h2>
                        </div>
                        <div class="col-md-2 text-center">
                            <span class="deco-big" data-scroll-speed="2">&amp;</span>
                        </div>
                        <div class="col-md-5 text-left text-center-sm relative">
                            <h2 class="name">{{$wedding->calon_pria}}</h2>
                        </div>
                    </div>
                    <div class="text-center">
                        <h2 class="s2" style="font-style: italic;">{{$wedding->description ?? ''}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="custom-owl-slider" class="owl-slide" data-scroll-speed="2">
        <div class="item">
            <img src="{{asset('assets/themes/default/images/slider/1.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{asset('assets/themes/default/images/slider/2.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{asset('assets/themes/default/images/slider/3.jpg')}}" alt="">
        </div>
    </div>
</section>