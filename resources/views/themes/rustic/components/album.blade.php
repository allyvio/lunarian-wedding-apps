@if($wedding->gallery->count() > 0)
<section class="just-married container-promise" style="height: 500px; background-color: #F2F1EF">
  
  <div class="overlay-album" style="background: url('{{asset('storage/media/'.$wedding->gallery[1]->filename)}}');background-position: center center; background-size: cover; "></div>
  
  <div style="bottom: -1px; overflow: hidden; position: absolute; left: 0; width: 100%; line-height: 0;direction: ltr;" data-negative="true">
    <svg style="width: calc(250% + 1.3px); height: 500px; transform: translateX(-50%) rotateY(180deg); display: block;position: relative; left: 50%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
      <path style="fill: #F2F1EF" d="M615.2,96.7C240.2,97.8,0,18.9,0,0v100h1000V0C1000,19.2,989.8,96,615.2,96.7z"></path>
    </svg>
  </div>
  
</section>

<section id="wedding" class="wedding pb-100" style="background-color: #F2F1EF !important">
  <div class="container event-container" >
    <div class="row">
      <div class="col-sm-12 text-center animasi-zooin animated">
        <p class="title-with-love mt-5">Dua Menjadi Satu</p>
      </div>
      <div class="col-sm-12 text-center px-4 py-4 animasi-fadeup animated">
        <p class="content-with-love">Karena aku telah memantapkan diri dan aku percaya bahwa mencintaimu adalah cara terindah untuk menyempurnakan agamaku</p>
      </div>
      <div class="col-sm-12 text-center px-4 animasi-fadeup animated">
        <p class="content-with-love">({{$wedding->nama_calon_pria}} Untuk {{$wedding->nama_calon_wanita}})</p>
      </div>
    </div>
    <!--End row-->
  </div>
  <!--End container-->
</section>

<section id="section-gallery" style="background-color: #F2F1EF !important; padding-bottom: 100px">
  <div class="container" style="padding: 0px 20px 0px 20px;">
    <div class="row">
      <div class="col-md-12">
        <div class="de_tab tab_style_3 text-center">
          <div class="de_tab_content">
            @foreach($wedding->gallery as $gallery)
            <div class="masonry animasi-zooin animated">
              <figure class="picframe mb20">
                <a class="image-popup-gallery" href="{{asset('storage/media/'.$gallery->filename)}}">
                  <span class="overlay-v">
                    <i></i>
                  </span>
                </a>
                <img src="{{asset('storage/media/'.$gallery->filename)}}" class="img-responsive img-rounded" alt="" style="border-radius: 15px">
              </figure>
              <div class="clearfix"></div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endif