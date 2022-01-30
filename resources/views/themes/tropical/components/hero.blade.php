<section id="section-hero" class="full-height relative z1 owl-slide-wrapper no-top no-bottom text-light" data-stellar-background-ratio=".2">

    <div class="center-y fadeScroll relative" data-scroll-speed="4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="spacer-single"></div>
                        <div class="col-md-5 text-right text-center-sm relative">
                            <h2 class="name">{{strtok($wedding->calon_wanita," ")}}</h2>
                        </div>
                        <div class="col-md-2 text-center">
                            <span class="deco-big" data-scroll-speed="2">&amp;</span>
                        </div>
                        <div class="col-md-5 text-left text-center-sm relative">
                            <h2 class="name">{{strtok($wedding->calon_pria," ")}}</h2>
                        </div>
                    </div>
                    <div class="text-center">
                        <h2 class="s2" style="font-style: italic;">{{$wedding->description ?? ''}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($wedding->hero->count() > 0)
        @if($wedding->hero->count() == 1)
            <div class="hero-image" style="background-image: url({{asset('storage/media/'.$wedding->hero->first()->filename)}});">
        @elseif($wedding->hero->count() > 1)
            <div class="owl-slider-nav">
                <div class="next"></div>
                <div class="prev"></div>
            </div>
            <div id="custom-owl-slider" class="owl-slide" data-scroll-speed="2">
            @foreach($wedding->hero as $hero)
                <div class="item">
                    <img src="{{asset('storage/media/'.$hero->filename)}}" alt="">
                </div>
            @endforeach
        @endif
        </div>
    @else
        <div class="hero-image" style="background-color: white;">
        </div>
    @endif
</section>