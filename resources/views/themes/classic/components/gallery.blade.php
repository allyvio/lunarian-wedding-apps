@if($wedding->gallery->count() > 0)
<section id="gallery" class="gallery section-boxed section-bg-color">
    <div class="container">
        <div class="section-title">
            <h2>Galeri</h2>
        </div>
        <!-- Gallery Items -->
        <div class="row gallery-grid">
            @foreach($wedding->gallery as $gallery)
            <div class="col-sm-6 col-md-4 gallery-item">
                <a href="{{asset('storage/media/'.$gallery->filename)}}" title="Digital Invitation">
                    <img src="{{asset('storage/media/'.$gallery->filename)}}" alt="">
                    <div class="mask"></div>
                </a>
            </div>
            @endforeach
        </div>
        <!-- /Gallery Items -->
    </div>
</section>
@endif
