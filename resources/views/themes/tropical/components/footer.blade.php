<style>
    footer::before {
        content: "";
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 340px;
        position: absolute;
        top: 0px;
        right: 0px;
        left: 0px;
        filter: brightness(0.7);
        background-image: url({{asset('storage/media/'.$wedding->hero->first()->filename)}});
    }
</style>
<footer style="position: relative;padding-top: 150px;">
    <div class="container text-center text-light">
        <div class="row">
            <div class="col-md-12">
                <h2 class="hs1 wow fadeInUp">{{strtok($wedding->calon_wanita," ")}}<span>&amp;</span>{{strtok($wedding->calon_pria," ")}}</h2>
            </div>
        </div>
    </div>
    <div class="subfooter" style="margin-top: 140px;">
        <div class="container text-center">
            &copy; Copyright {{date('Y')}} - {{config('app.name')}}
        </div>
    </div>
</footer>