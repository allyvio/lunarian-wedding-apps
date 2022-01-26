@if($wedding->quote)
<section class="just-married pt-50 pb-50 overlay">
    <div class="background-img">
        <img src="{{asset('assets/themes/destiny/img/hero-3.jpeg')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 wow fadeIn">
                <div class="ql-editor" style="background-color: transparent;border: none;color:#fff; font-size:30px; font-family:Arial;">
                    {!!$wedding->quote!!}
                </div>
            </div>
        </div>
    </div>
</section>
@endif
