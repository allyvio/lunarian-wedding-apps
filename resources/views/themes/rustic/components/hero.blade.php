
<section class="hero overlay">
  
  <div class="" style="width:100%; height:100%;">
    @if($wedding->hero->count() > 0)
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:100%; height:100%;">
      <!-- Wrapper for slides -->
      <div class="owl-carousel owl-theme carousel-self" role="listbox" style="height: inherit; opacity: 0.8">
        @foreach($wedding->hero as $hero)
        <div class="item" style="height: inherit;">
          <img class="heroBanner" style="width:100%; height:inherit;object-fit: cover;" src="{{asset('storage/media/'.$hero->filename)}}">
        </div>
        @endforeach
      </div>
    </div>
    @endif
  </div>
  
  
  <!--Inner hero-->
  <div class="inner-hero" style="bottom: -100px; top: auto !important">
    <!--Container-->
    <div class="container hero-content">
      <!--Row-->
      <div class="row">
        <div class="col-sm-12 text-center slideInUp animated">
          <div class="wedding_of">
            THE WEDDING OF
          </div>
          <div class="namaPasangan text-capitalize my-3">
            {{$wedding->nama_calon_pria}} <br> & <br> {{$wedding->nama_calon_wanita}}
          </div>
        </div>
      </div>
      <!--End row-->
    </div>
    <!--End container-->
  </div>
  <!--End inner hero-->
  

</section>