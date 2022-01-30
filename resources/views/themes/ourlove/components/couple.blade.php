<section id="home" class="home-section clearfix">
  <div id="hs-image-block" class="hs-image-block" data-stellar-background-ratio="0.3">
    <div class="hs-mask">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width:100%; height:100%;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
        </ol>
        <div class="carousel-inner" style="width:100%; height:100%;">
          <div class="carousel-item active" style="width:100%; height:100%;">
            <img class="d-block w-100" src="{{asset('assets\themes\ourlove\img\hero-3.jpeg')}}" alt="First slide" style="width:100%; height:100%; object-fit:cover;">
            <!-- <div class="carousel-caption d-none d-md-block">
              <div class="hs-section-title">
                <h1>Kita Akan Menikah</h1>
                <div class="text-center">
                    <h2 class="s2" style="font-style: italic; color:white;">{{$wedding->description ?? ''}}</h2>
                </div>
              </div>
            </div> -->
          </div>
          <div class="carousel-item" style="width:100%; height:100%;">
            <img class="d-block w-100" src="{{asset('assets\themes\ourlove\img\hero-3.jpeg')}}" alt="First slide" style="width:100%; height:100%; object-fit:cover;">
            <!-- <div class="carousel-caption d-none d-md-block">
              <div class="hs-section-title">
                <h1>Kita Akan Menikah</h1>
                <div class="text-center">
                    <h2 class="s2" style="font-style: italic; color:white;">{{$wedding->description ?? ''}}</h2>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
//master
  @if($wedding->has('hero')->count() > 0)
  <div id="hs-image-block" class="hs-image-block" data-stellar-background-ratio="0.3" style="background-image: url({{asset('storage/media/'.$wedding->hero->first()->filename)}});">
    @else
    <div id="hs-image-block" class="hs-image-block" data-stellar-background-ratio="0.3">
  @endif
    <div class="hs-mask"></div>
//master
  </div>
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
        <img src="{{asset('assets/themes/ourlove/img/heart_img.png')}}" alt="">
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
