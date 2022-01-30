<section id="home" class="home-section clearfix">
  <style media="screen">
        .carousel .carousel-indicators li {
      background-color: #fff;
      background-color: rgba(70,70,70,.25);
      }

      .carousel .carousel-indicators .active {
      background-color: #444;
      }
  </style>
  @if($wedding->hero->count() > 0)
  <div id="hs-image-block" class="hs-image-block" data-stellar-background-ratio="0.3">
    <div class="hs-mask">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:100%; height:100%;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="object-fit:cover; width:100%; height:100%;">
          <?php
              $x = 1;
           ?>
          @foreach($wedding->hero as $hero)
          <div class="item {{($x == 1 ) ?  'active' : '' }}"style="width:100%; height:100%;">
            <img style="width:100%; height:100%;" src="{{asset('storage/media/'.$hero->filename)}}">
            <?php
                $x++;
             ?>
          </div>
          @endforeach
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  @endif
  <div class="hs-main-content container">
    <div class="hs-section-title">
      <h1>Kita Akan Menikah</h1>
      <div class="text-center">
          <h2 class="s2" style="font-style: italic; color:white;">{{$wedding->description ?? ''}}</h2>
      </div>
    </div>
    <div class="about-us clearfix">
      <div class="about-us-block first-block">
        <div class="top-block">
          <div class="name">
            <h2>{{$wedding->calon_pria}}</h2>
          </div>
          <div class="photo">
            <img src="{{asset('storage/couple/' . $wedding->calon_pria_photo)}}" alt="">
          </div>
          <div class="bottom-block"></div>
        </div>
      </div>
      <div class="heart">
        <img src="{{asset('assets/themes/classic/img/heart_img.png')}}" alt="">
      </div>
      <div class="about-us-block second-block">
        <div class="top-block">
          <div class="name">
            <h2>{{$wedding->calon_wanita}}</h2>
          </div>
          <div class="photo">
            <img src="{{asset('storage/couple/' . $wedding->calon_wanita_photo)}}" alt="">
          </div>
          <div class="bottom-block"></div>
        </div>
      </div>
    </div>
  </div>
</section>

@push('scripts')
<script>
  jQuery("#custom-owl-slider").owlCarousel({
			items: 1,
			singleItem: true,
			navigation: false,
			pagination: false,
			autoPlay: true,
			mouseDrag: false,
			touchDrag: true,
			transitionStyle: "fadeUp"
		});
</script>
@endpush
