<section id="home" class="home-section clearfix">
  <div id="hs-image-block" class="hs-image-block" data-stellar-background-ratio="0.3">
    <div class="hs-mask"></div>
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
