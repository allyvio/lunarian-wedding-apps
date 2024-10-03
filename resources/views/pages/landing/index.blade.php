@extends('layout.wrapper-plain')
@section('plain-content')
<div class="header bg-lightbrown pt-8">
    <div class="container">
        <div class="header-body">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="pr-5">
                        <h1 class="display-3 text-white font-weight-bold mb-0">Make your wedding invitation easy with us !</h1>
                        <h2 class="display-5 text-white font-weight-light">by Lunarian ID</p>
                            <p class="lead">Buat undangan digitalmu dengan mudah, cepat, dan lebih berkesan dengan fitur yang kami sediakan.</p>
                            <div class="mt-5">
                                <!-- <a href="./pages/dashboards/dashboard.html" class="btn btn-brown2 my-2">Explore Dashboard</a> -->
                                <a id="scroll-to-bottom" class="btn btn-brown my-2" style="cursor:pointer">Explore Dashboard</a>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6">
                  <div class="container">
                      <div class="row row-grid align-items-center">
                          <!-- <div class="col-md-6"> -->
                              <img src="{{asset('img/theme/mock2.png')}}" class="img-fluid">
                          <!-- </div> -->
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <svg width="100%" height="100px" preserveAspectRatio="none" viewBox="50 0 1000 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path class="fill-secondary" d="M1300,0 L1300,99.9998042 L0,99.9998042 L0,60.1910374 C549.576968,-84.3633414 541.584175,191.147059 1300,0 Z" fill="#FFFFFF"></path>
    </svg>
</div>
<!-- OVERVIEW -->
<section id="page-bottom" class="py-6">
    <div class="container">
        <div class="row row-grid align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="{{asset('img/theme/mock1.png')}}" class="img-fluid">
            </div>
            <div class="col-md-6 order-md-1">
                <div class="pr-md-5">
                    <h1>Design Elegant</h1>
                    <p>Pilihan tema elegant dan profesional</p>
                    <ul class="list-unstyled">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-block btn-outline-brown" data-toggle="modal" data-target="#temaTropical">
                                <i class="ni ni-box-2"></i> TEMA-TROPICAL
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="temaTropical" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tema Tropical</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{asset('img/theme/tropical.jpeg')}}" class="img-fluid">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-block btn-outline-brown" data-toggle="modal" data-target="#temaClassic">
                                <i class="ni ni-box-2"></i> TEMA-CLASSIC
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="temaClassic" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tema CLASSIC</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{asset('img/theme/clasic.jpeg')}}" class="img-fluid">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                           <div class="d-flex align-items-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-block btn-outline-brown" data-toggle="modal" data-target="#temaRustic">
                                <i class="ni ni-box-2"></i> TEMA-RUSTIC
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="temaRustic" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tema RUSTIC</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{asset('img/theme/rustic.jpeg')}}" class="img-fluid">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-6">
    <div class="container">
        <div class="row row-grid align-items-center">
            <div class="col-md-6">
                <img src="{{asset('img/theme/mock3.png')}}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="pr-md-5">
                    <h1>Tamu Spesial</h1>
                    <p>	Buat undangan dengan nama tamu pada tiap undangan sehingaa terkesan lebih personal</p>
                    <!-- <a href="./pages/examples/profile.html" class="font-weight-bold text-warning mt-5">Explore pages</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-6">
    <div class="container">
        <div class="row row-grid align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="{{asset('img/theme/mock4.png')}}" class="img-fluid">
            </div>
            <div class="col-md-6 order-md-1">
                <div class="pr-md-5">
                    <h1>Ucapan & RSVP</h1>
                    <p>Para undangan dapat memberi ucapan dan doa yang akan ditampilkan pada website serta dapat mengkonfirmasi kedatangan</p>
                    <!-- <a href="./pages/widgets.html" class="font-weight-bold text-info mt-5">Explore widgets</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OVERVIEW -->
<!-- RULE OF 3 -->
<section class="bg-lightbrown">
    <svg width="100%" preserveAspectRatio="none" height="100px" transform="rotate(180)" viewBox="50 -16 1000 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path class="fill-secondary" d="M1300,0 L1300,99.9998042 L0,99.9998042 L0,60.1910374 C549.576968,-84.3633414 541.584175,191.147059 1300,0 Z"></path>
    </svg>
    <div class="container mt-6 pb-9">
      <div class="row justify-content-center text-center">
        <!-- <div class="col-md-6"> -->
        <h2 class="display-3 text-dark">Fitur Utama</h3>
          <!-- <div class="row justify-content-center"> -->
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-6 mb60">
                  <!-- <div class="card"> -->
                  <div class="mb30">
                    <span class="h1 circle text-brown">
                      <i class="fas fa-music"></i>
                    </span>
                  </div>
                  <h4 class="h2 text-dark text-uppercase">Musik</h4>
                  <h4 class="h4 text-brown text-uppercase">Pilih lagu kesukaanmu untuk menambah keromantisan undangan</h4>
                  <!-- </div> -->
                </div>
                <div class="col-lg-6 mb60">
                  <!-- <div class="card"> -->
                  <div class="mb30">
                    <span class="h1 circle text-brown">
                      <i class="fas fa-map-marker-alt"></i>
                    </span>
                  </div>
                  <h4 class="h2 text-dark text-uppercase">Navigasi</h4>
                  <h4 class="h4 text-brown text-uppercase">Petunjuk venue acara ditampilkan untuk mempermudah para undangan</h4>
                  <!-- </div> -->
                </div>
              </div>
            </div>
          <!-- </div> -->
          <!-- <div class="row justify-content-center"> -->
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-6 mb60">
                  <!-- <div class="card"> -->
                  <div class="mb30">
                    <span class="h1 circle text-brown">
                      <i class="fas fa-image"></i>
                    </span>
                  </div>
                  <h4 class="h2 text-dark text-uppercase">Galeri foto</h4>
                  <h4 class="h4 text-brown text-uppercase">Tampilkan foto yang melambangkan moment bahagiamu</h4>
                  <!-- </div> -->
                </div>
                <div class="col-lg-6 mb60">
                  <!-- <div class="card"> -->
                  <div class="mb30">
                    <span class="h1 circle text-brown">
                      <i class="fas fa-heart"></i>
                    </span>
                  </div>
                  <h4 class="h2 text-dark text-uppercase">Love story</h4>
                  <h4 class="h4 text-brown text-uppercase">Cerita kisah cintamu untuk melengkapi moment bahagia</h4>
                  <!-- </div> -->
                </div>
              </div>
            </div>
          <!-- </div> -->
          <!-- </div> -->
        </div>
      </div>

    <svg width="100%" preserveAspectRatio="none" height="90px" viewBox="0 0 2000 400" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
        <path d="M 0,367 C 200,316.6 600,114 1000,115 C 1400,116 1800,320.6 2000,372L2000 400L0 400z" class="fill-secondary"></path>
    </svg>
</section>
<!-- END POINT OF 3 -->
<!-- TESTIMONIAL -->
<!-- <section class="py-7 pb-9 overflow-hidden">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-3">Testimonial</h2>
            </div>
        </div>
        <div class="owl-carousel owl-theme slider mb-6">
            @for($i = 0;$i < 10; $i++) <div class="item" style="width: 450px;">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-primary mb-3">{{ $i+1 }} Testimonial</h3>
                        <div class="mb-1">
                            <i class="fa fa-star text-yellow"></i>
                            <i class="fa fa-star text-yellow"></i>
                            <i class="fa fa-star text-yellow"></i>
                            <i class="fa fa-star text-yellow"></i>
                            <i class="fa fa-star text-yellow"></i>
                        </div>
                        <blockquote class="blockquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
        </div>
        @endfor
    </div>
    </div>
</section> -->
<section>
    <svg width="100%" preserveAspectRatio="none" height="90px" viewBox="0 0 2000 400" transform="rotate(180)" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
        <path d="M 0,367 C 200,316.6 600,114 1000,115 C 1400,116 1800,320.6 2000,372L2000 400L0 400z" class="fill-secondary"></path>
    </svg>
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="pricing card-group flex-column flex-md-row mb-3 mt--9">
                  @foreach(\App\Models\Package::all() as $package)
                  @if($package->id == 1)
                    <div class="card card-pricing border-0 text-center mb-4">
                        <div class="card-header bg-transparent">
                            <h4 class="text-uppercase ls-1 text-brown py-3 mb-0">Paket {{$package->name}}</h4>
                            <span class="badge badge-pill badge-warning">Diskon 30%</span>
                        </div>
                        <div class="card-body px-lg-5">
                            <div class="display-4">{!!$package->price ? 'Rp.'. number_format($package->price, 0, "," , ".") : 'GRATIS'!!}</div>
                            <span class="text-muted"><s>{!!$package->value ? 'Rp.'. number_format($package->value,0,",",".") : 'GRATIS'!!}</s></span>
                            <ul class="list-unstyled my-4">
                                 <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                                <i class="fas fa-image"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-dark">{{$package->count_galleri}} Foto</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                                <i class="fas fa-book"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-dark">Kutipan</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-dark">Navigasi</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-dark">Informasi</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-dark">Jam</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                                <i class="fas fa-head-side-mask"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-dark">Protokol</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{route('wedding.create',['package'=>'basic'])}}" class="btn btn-outline-brown mb-3">Beli Sekarang</a>
                            <!-- <button type="button" class="btn btn-outline-primary">Primary</button> -->
                        </div>
                        <!-- <div class="card-footer">
                            <a href="#!" class="text-light">Request a demo</a>
                        </div> -->
                    </div>
                    @endif
                    @endforeach
                    @foreach(\App\Models\Package::all() as $package)
                    @if($package->id == 3)
                    <div class="card card-pricing bg-brown zoom-in shadow-lg rounded border-0 text-center mb-4">
                        <div class="card-header bg-transparent">
                            <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Paket {{$package->name}}</h4>
                            <span class="badge badge-pill badge-warning">Diskon 50%</span>
                        </div>
                        <div class="card-body px-lg-5">
                            <div class="display-4 text-white">{!!$package->price ? 'Rp.'. number_format($package->price,0,",",".") : 'GRATIS'!!}</div>
                            <span class="text-muted"><s>{!!$package->value ? 'Rp.'. number_format($package->value,0,",",".") : 'GRATIS'!!}</s></span>
                            <ul class="list-unstyled my-4">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-image"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">{{$package->count_galleri}} Foto</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-book"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">Kutipan</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">Navigasi</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">Informasi</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">Jam</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">Cerita Cinta</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-music"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">Musik</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">{{$package->count_invitation}} Undangan</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">RSVP</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-columns"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">Kolom Ucapan</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-eye"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">Link Live Streaming</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-head-side-mask"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">Protokol</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{route('wedding.create',['package'=>'exclusive'])}}" class="btn btn-secondary mb-3 disabled">Coming Soon</a>
                        </div>
                        <!-- <div class="card-footer bg-transparent">
                            <a href="#!" class="text-white">Contact sales</a>
                        </div> -->
                    </div>
                    @endif
                    @endforeach
                    @foreach(\App\Models\Package::all() as $package)
                    @if($package->id == 2)
                    <div class="card card-pricing border-0 text-center mb-4">
                        <div class="card-header bg-transparent">
                            <h4 class="text-uppercase ls-1 text-brown py-3 mb-0">Paket {{$package->name}}</h4>
                            <span class="badge badge-pill badge-warning">Diskon 45%</span>
                        </div>
                        <div class="card-body px-lg-5">
                            <div class="display-4">{!!$package->price ? 'Rp.'. number_format($package->price,0,",",".") : 'GRATIS'!!}</div>
                            <span class="text-muted"><s>{!!$package->value ? 'Rp.'. number_format($package->value,0,",",".") : 'GRATIS'!!}</s></span>
                            <ul class="list-unstyled my-4">
                             <li>
                                  <div class="d-flex align-items-center">
                                      <div>
                                          <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                              <i class="fas fa-image"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="pl-2 text-dark">{{$package->count_galleri}} Foto</span>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="d-flex align-items-center">
                                      <div>
                                          <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                              <i class="fas fa-book"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="pl-2 text-dark">Kutipan</span>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="d-flex align-items-center">
                                      <div>
                                          <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                              <i class="fas fa-map-marker-alt"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="pl-2 text-dark">Navigasi</span>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="d-flex align-items-center">
                                      <div>
                                          <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                              <i class="fas fa-user"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="pl-2 text-dark">Informasi</span>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="d-flex align-items-center">
                                      <div>
                                          <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                              <i class="fas fa-clock"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="pl-2 text-dark">Jam</span>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="d-flex align-items-center">
                                      <div>
                                          <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                              <i class="fas fa-heart"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="pl-2 text-dark">Cerita Cinta</span>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="d-flex align-items-center">
                                      <div>
                                          <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                              <i class="fas fa-music"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="pl-2 text-dark">Musik</span>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="d-flex align-items-center">
                                      <div>
                                          <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                              <i class="fas fa-user"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="pl-2 text-dark">{{$package->count_invitation}} Undangan</span>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="d-flex align-items-center">
                                      <div>
                                          <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                              <i class="fas fa-users"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="pl-2 text-dark">RSVP</span>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="d-flex align-items-center">
                                      <div>
                                          <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                              <i class="fas fa-columns"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="pl-2 text-dark">Kolom Ucapan</span>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="d-flex align-items-center">
                                      <div>
                                          <div class="icon icon-xs icon-shape bg-gradient-lightbrown shadow rounded-circle text-white">
                                              <i class="fas fa-head-side-mask"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <span class="pl-2 text-dark">Protokol</span>
                                      </div>
                                  </div>
                              </li>
                            </ul>
                            <a href="{{route('wedding.create',['package'=>'premium'])}}" class="btn btn-outline-brown mb-3 disabled">Coming Soon</a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row row-grid justify-content-center"></div>
    </div>
    <svg width="100%" preserveAspectRatio="none" height="90px" viewBox="850 0 1200 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48h2880V0h-720C1442.5 62 720 0 720 0H0v48z" class="fill-secondary"></path>
    </svg>
</section>
<!-- END TESTIMONIAL -->
<!-- Button wa -->
<a href="https://api.whatsapp.com/send?phone=6281359598007" class="act-btn bg-gradient-success" data-toggle="tooltip" data-placement="top" title="Hubungi Admin">
    <span class="btn-inner--icon"><i class="fab fa-whatsapp"></i></span>
</a>
@endsection
@push('scripts')
<script>
    $('.owl-carousel').owlCarousel({
        center: true,
        loop: true,
        margin: 40,
        autoWidth: true,
        nav: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        responsive: {
            600: {
                items: 1
            },
            1000: {
                items: 3
            },
        }
    })

    let scrollToBottom = document.querySelector("#scroll-to-bottom")
    let pageBottom = document.querySelector("#page-bottom")

    scrollToBottom.addEventListener("click", function() {
    pageBottom.scrollIntoView()
    })
</script>
@endpush
