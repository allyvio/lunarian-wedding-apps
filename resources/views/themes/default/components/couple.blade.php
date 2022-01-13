<section id="section-couple" class="no-top">
    <div class="container relative mt-60 z-index">
        <div class="row">

            <div class="col-md-5 col-md-offset-1 text-center">
                <img src="{{asset('storage/couple/' . $wedding->calon_wanita_photo)}}" alt="bride-photo" class="img-couple img-rounded wow fadeInLeft" data-wow-delay=".2s" />
                <div class="padding40">
                    <h2>{{$wedding->calon_wanita}}</h2>
                </div>
            </div>

            <div class="col-md-5 text-center">
                <img src="{{asset('storage/couple/' . $wedding->calon_pria_photo)}}" alt="groom-photo" class="img-couple img-rounded wow fadeInRight" data-wow-delay=".2s" />
                <div class="padding40">
                    <h2>{{$wedding->calon_pria}}</h2>
                </div>
            </div>

            <div class="col-md-2 col-md-offset-5 text-center absolute">
                <span class="circle wow zoomIn" data-wow-delay=".8s">
                    <i class="fa fa-heart"></i>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</section>