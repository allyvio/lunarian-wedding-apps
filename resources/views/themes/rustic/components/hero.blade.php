<section class="hero overlay">
  <div class="" style="width:100%; height:100%;">
    @if($wedding->hero->count() > 0)
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:100%; height:100%;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php $x = 0; ?>
        @foreach($wedding->hero as $hero)
        <li data-target="#carousel-example-generic" data-slide-to="{{$x}}" class="{{($x == 0 ) ?  'active' : '' }}"></li>
        <?php $x++; ?>
        @endforeach
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox" style="object-fit:cover; width:100%; height:100%;">
        <?php $x = 1; ?>
        @foreach($wedding->hero as $hero)
        <div class="item {{($x == 1 ) ?  'active' : '' }}" style="width:100%; height:100%;">
          <img style="width:100%; height:100%;" src="{{asset('storage/media/'.$hero->filename)}}">
          <?php $x++; ?>
        </div>
        @endforeach
      </div>
      <!-- Controls -->
      <a class="left carousel-control" style="z-index:100; font-size:50px;" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
      </a>

      <a class="right carousel-control" style="z-index:100;" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
      </a>
    </div>
    @endif
  </div>

  <!--Inner hero-->
  <div class="inner-hero">
    <!--Container-->
    <div class="container hero-content">
      <!--Row-->
      <div class="row">
        <div class="col-sm-12 text-center">
          <h1 class="large mb-20" style="font-family:italic;"> {{$wedding->calon_pria}} <br> &amp; <br> {{$wedding->calon_wanita}}</h1>
          <div class="block-date-hero">
            <div class="circle-dashed bg-n">
              <div class="round-circle">
                <svg viewBox="0 0 103 103" version="1.1" xmlns="http://www.w3.org/2000/svg" class="dashed-border">
                  <circle cx="50%" cy="50%" r="50" />
                </svg>
                <i class="icon-heart"></i>
              </div>
            </div>
            <ul>
              <li>Catat Tanggalnya</li>
              <li>{{date('d F Y',strtotime($wedding->main_date))}}</li>
            </ul>
          </div>
        </div>
      </div>
      <!--End row-->
    </div>
    <!--End container-->
  </div>
  <!--End inner hero-->
</section>