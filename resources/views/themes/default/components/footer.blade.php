<footer>
    <div class="container text-center text-light">
        <div class="row">
            <div class="col-md-12">
                <h2 class="hs1 wow fadeInUp">{{strtok($wedding->calon_wanita," ")}}<span>&amp;</span>{{strtok($wedding->calon_pria," ")}}</h2>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container text-center">
            &copy; Copyright {{date('Y')}} - {{config('app.name')}}
        </div>
    </div>
</footer>