<section id="home" class="home-section clearfix">
    <div id="hs-image-block" class="hs-image-block" data-stellar-background-ratio="0.3">
        <div class="hs-mask"></div>
    </div>
    <div class="hs-main-content container">
        <div class="hs-section-title">
            <h1>Kita Akan Menikah</h1>
        </div>

        <div class="about-us clearfix">
            <div class="about-us-block first-block">
                <div class="photo">
                    <img src="{{asset('storage/couple/' . $wedding->calon_wanita_photo)}}" alt="">
                </div>
                <div class="top-block">
                    <div class="name">
                        <h2>{{$wedding->calon_wanita}}</h2>
                        <ul class="social-links">
                            <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="tip social-button" href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="heart">
                <img src="{{asset('assets/themes/ourlove/img/heart_img.png')}}" alt="">
            </div>
            <div class="about-us-block second-block">
                <div class="photo">
                    <img src="{{asset('storage/couple/' . $wedding->calon_pria_photo)}}" alt="">
                </div>
                <div class="top-block">
                    <div class="name">
                        <h2>{{$wedding->calon_pria}}</h2>
                        <ul class="social-links">
                            <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="tip social-button" href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>