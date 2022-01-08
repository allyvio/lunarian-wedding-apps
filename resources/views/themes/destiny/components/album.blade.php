@if($wedding->gallery->count() > 0)
<section id="album" class="album bg-grey pt-120 pb-120">
  <div class="container">
    <div class="row mb-30">
      <h2 class="indent">Photo album</h2>
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
