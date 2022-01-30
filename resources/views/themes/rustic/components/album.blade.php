@if($wedding->gallery->count() > 0)
<section id="album" class="album bg-grey pt-90 pb-120">
  <div class="container">
    <div class="text-center mb-100">
      <h1 class="title">Photo Album</h1>
    </div>
    <div class="row mb-30">
      @foreach($wedding->gallery as $gallery)
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="block-img">
          <a href="{{asset('storage/media/'.$gallery->filename)}}" class="venobox">
            <div class="background-img">
              <img alt="" src="{{asset('storage/media/'.$gallery->filename)}}">
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif