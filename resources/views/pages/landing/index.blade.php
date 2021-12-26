@extends('layout.wrapper-plain')
@section('plain-content')
<div class="header bg-gradient-info pt-8">
    <div class="container">
        <div class="header-body">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="pr-5">
                        <h1 class="display-2 text-white font-weight-bold mb-0">Digital Invitation</h1>
                        <h2 class="display-4 text-white font-weight-light">by Lunarian ID</p>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="mt-5">
                                <a href="./pages/dashboards/dashboard.html" class="btn btn-neutral my-2">Explore Dashboard</a>
                                <a href="https://www.creative-tim.com/product/argon-dashboard-pro" class="btn btn-default my-2">Purchase now</a>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row pt-5">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-4">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    <h5 class="h3">Website</h5>
                                    <p>Argon comes with over 70 handcrafted components.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow mb-4">
                                        <i class="fas fa-address-card"></i>
                                    </div>
                                    <h5 class="h3">Undangan Otomatis</h5>
                                    <p>Fully integrated and extendable third-party plugins that you will love.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-lg-5 pt-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow mb-4">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <h5 class="h3">Layar Sapa</h5>
                                    <p>From simple to complex, you get a beautiful set of 15+ page examples.</p>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow mb-4">
                                        <i class="fas fa-credit-card"></i>
                                    </div>
                                    <h5 class="h3">Pembayaran Mudah</h5>
                                    <p>You will love how easy is to to work with Argon.</p>
                                </div>
                            </div>
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
<section class="py-6">
    <div class="container">
        <div class="row row-grid align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="{{asset('img/theme/landing-1.png')}}" class="img-fluid">
            </div>
            <div class="col-md-6 order-md-1">
                <div class="pr-md-5">
                    <h1>Undangan Digital yang Berkesan</h1>
                    <p>This dashboard comes with super cool features that are meant to help in the process. Handcrafted
                        components, page examples and functional widgets are just a few things you will see and love at first
                        sight.</p>
                    <ul class="list-unstyled mt-5">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="badge badge-circle badge-success mr-3">
                                        <i class="ni ni-settings-gear-65"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-0">Carefully crafted components</h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="badge badge-circle badge-success mr-3">
                                        <i class="ni ni-html5"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-0">Amazing page examples</h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="badge badge-circle badge-success mr-3">
                                        <i class="ni ni-satisfied"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-0">Super friendly support team</h4>
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
                <img src="{{asset('img/theme/landing-2.png')}}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="pr-md-5">
                    <h1>Buat Kenangan dalam Bentuk Website</h1>
                    <p>If you want to get inspiration or just show something directly to your clients, you can jump start your
                        development with our pre-built example pages.</p>
                    <a href="./pages/examples/profile.html" class="font-weight-bold text-warning mt-5">Explore pages</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-6">
    <div class="container">
        <div class="row row-grid align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="{{asset('img/theme/landing-3.png')}}" class="img-fluid">
            </div>
            <div class="col-md-6 order-md-1">
                <div class="pr-md-5">
                    <h1>Lebih Dekat dengan Para Tamu</h1>
                    <p>We love cards and everybody on the web seems to. We have gone above and beyond with options for you to
                        organise your information. From cards designed for content, to pricing cards or user profiles, you will
                        have many options to choose from.</p>
                    <a href="./pages/widgets.html" class="font-weight-bold text-info mt-5">Explore widgets</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OVERVIEW -->
<!-- RULE OF 3 -->
<section class="bg-gradient-danger">
    <svg width="100%" preserveAspectRatio="none" height="100px" transform="rotate(180)" viewBox="50 -16 1000 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path class="fill-secondary" d="M1300,0 L1300,99.9998042 L0,99.9998042 L0,60.1910374 C549.576968,-84.3633414 541.584175,191.147059 1300,0 Z"></path>
    </svg>
    <div class="container mt-6 pb-9">
        <div class="row justify-content-center text-center">
            <div class="col-md-6">
                <h2 class="display-3 text-white">Rule of three</h3>
                    <p class="lead text-white">
                        Argon is a completly new product built on our newest re-built from scratch framework structure that is
                        meant to make our products more intuitive,
                        more adaptive and, needless to say, so much easier to customize. Let Argon amaze you with its cool
                        features and build tools and get your project to a whole new level.
                    </p>
            </div>
        </div>
    </div>
    <svg width="100%" preserveAspectRatio="none" height="90px" viewBox="0 0 2000 400" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
        <path d="M 0,367 C 200,316.6 600,114 1000,115 C 1400,116 1800,320.6 2000,372L2000 400L0 400z" class="fill-secondary"></path>
    </svg>
</section>
<section class="section section-lg pt-lg-0 mt--9">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-5">
                                <div class="media">
                                    <div class="icon icon-shape bg-gradient-primary text-white rounded-circle mb-4 mr-4">
                                        <i class="ni ni-check-bold"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="h3 text-primary text-uppercase">Based on Bootstrap 4</h4>
                                        <p class="description mt-3">Argon is built on top of the most popular open source toolkit for
                                            developing with HTML, CSS, and JS.</p>
                                        <div>
                                            <span class="badge badge-pill badge-primary">bootstrap 4</span>
                                            <span class="badge badge-pill badge-primary">dashboard</span>
                                            <span class="badge badge-pill badge-primary">argon</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-5">
                                <div class="media">
                                    <div class="icon icon-shape bg-gradient-success text-white rounded-circle mb-4 mr-4">
                                        <i class="ni ni-istanbul"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="h3 text-success text-uppercase">Integrated build tools</h4>
                                        <p class="description mt-3">Use Argons's included npm and gulp scripts to compile source code, run
                                            tests, and more with just a few simple commands.</p>
                                        <div>
                                            <span class="badge badge-pill badge-success">npm</span>
                                            <span class="badge badge-pill badge-success">gulp</span>
                                            <span class="badge badge-pill badge-success">build tools</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-5">
                                <div class="media">
                                    <div class="icon icon-shape bg-gradient-warning text-white rounded-circle mb-4 mr-4">
                                        <i class="ni ni-planet"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="h3 text-warning text-uppercase">Full Sass support</h4>
                                        <p class="description mt-3">Argon makes customization easier than ever before. You get all the tools
                                            to make your website building process a breeze.</p>
                                        <div>
                                            <span class="badge badge-pill badge-warning">sass</span>
                                            <span class="badge badge-pill badge-warning">design</span>
                                            <span class="badge badge-pill badge-warning">customize</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END POINT OF 3 -->
<!-- TESTIMONIAL -->
<section class="py-7 pb-9 overflow-hidden">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-3">Testimonial</h2>
            </div>
        </div>
        <!-- Carousel -->
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
</section>
<section class="bg-gradient-default">
    <svg width="100%" preserveAspectRatio="none" height="90px" viewBox="0 0 2000 400" transform="rotate(180)" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
        <path d="M 0,367 C 200,316.6 600,114 1000,115 C 1400,116 1800,320.6 2000,372L2000 400L0 400z" class="fill-secondary"></path>
    </svg>
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="pricing card-group flex-column flex-md-row mb-3 mt--9">
                    <div class="card card-pricing border-0 text-center mb-4">
                        <div class="card-header bg-transparent">
                            <h4 class="text-uppercase ls-1 text-primary py-3 mb-0">Bravo pack</h4>
                        </div>
                        <div class="card-body px-lg-7">
                            <div class="display-2">$49</div>
                            <span class="text-muted">per application</span>
                            <ul class="list-unstyled my-4">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                                                <i class="fas fa-terminal"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2">Complete documentation</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                                                <i class="fas fa-pen-fancy"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2">Working materials in Sketch</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                                                <i class="fas fa-hdd"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2">2GB cloud storage</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-primary mb-3">Start free trial</button>
                        </div>
                        <div class="card-footer">
                            <a href="#!" class="text-light">Request a demo</a>
                        </div>
                    </div>
                    <div class="card card-pricing bg-gradient-success zoom-in shadow-lg rounded border-0 text-center mb-4">
                        <div class="card-header bg-transparent">
                            <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Alpha pack</h4>
                        </div>
                        <div class="card-body px-lg-7">
                            <div class="display-1 text-white">$199</div>
                            <span class="text-white">per application</span>
                            <ul class="list-unstyled my-4">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-terminal"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">Complete documentation</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-pen-fancy"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">Working materials in Sketch</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                                <i class="fas fa-hdd"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="pl-2 text-white">2GB cloud storage</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-secondary mb-3">Start free trial</button>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="#!" class="text-white">Contact sales</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-lg-center px-3 mt-5">
            <div>
                <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                    <i class="ni ni-building text-primary"></i>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="text-white"><strong>The Arctic Ocean</strong> freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
            </div>
        </div>
        <div class="row row-grid justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive">
                    <table class="table table-gradient-dark text-white mt-5">
                        <thead>
                            <tr>
                                <th class="px-0 bg-transparent" scope="col">
                                    <span class="text-light font-weight-700">Features</span>
                                </th>
                                <th class="text-center bg-transparent" scope="col">Bravo Pack</th>
                                <th class="text-center bg-transparent" scope="col">Alpha Pack</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-0">IMAP/POP Support</td>
                                <td class="text-center"><i class="fas fa-check text-success"></i>
                                </td>
                                <td class="text-center"><i class="fas fa-check text-success"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">Email Forwarding</td>
                                <td class="text-center"><i class="fas fa-check text-success"></i>
                                </td>
                                <td class="text-center"><i class="fas fa-check text-success"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">Active Sync</td>
                                <td class="text-center"><i class="fas fa-check text-success"></i>
                                </td>
                                <td class="text-center"><i class="fas fa-check text-success"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">Multiple domain hosting</td>
                                <td class="text-center"><i class="fas fa-check text-success"></i>
                                </td>
                                <td class="text-center">
                                    <span class="text-sm text-light">Limited to 1 domain only</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">Additional storage upgrade</td>
                                <td class="text-center"><i class="fas fa-check text-success"></i>
                                </td>
                                <td class="text-center"><i class="fas fa-check text-success"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">30MB Attachment Limit</td>
                                <td class="text-center"><i class="fas fa-check text-success"></i>
                                </td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td class="px-0">Password protected / Expiry links</td>
                                <td class="text-center"><i class="fas fa-check text-success"></i>
                                </td>
                                <td class="text-center">-</td>
                            </tr>
                            <tr>
                                <td class="px-0">Unlimited Custom Apps</td>
                                <td class="text-center"><i class="fas fa-check text-success"></i>
                                </td>
                                <td class="text-center">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <svg width="100%" preserveAspectRatio="none" height="90px" viewBox="850 0 1200 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48h2880V0h-720C1442.5 62 720 0 720 0H0v48z" class="fill-secondary"></path>
    </svg>
</section>
<!-- END TESTIMONIAL -->
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
</script>
@endpush