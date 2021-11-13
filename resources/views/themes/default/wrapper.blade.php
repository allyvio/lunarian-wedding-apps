<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('themes.default.layout.header')

<body id="homepage">
    <div id="wrapper">
        <!-- topnav begin -->
        @include('themes.default.layout.topnav')
        <!-- topnav end -->

        <div id="content" class="no-bottom no-top">
            <!-- rsvp popup begin -->
            @include('themes.default.components.rsvp-popup')
            <!-- section end -->

            <!-- hero section begin -->
            @include('themes.default.components.hero-slider')
            <!-- section end -->

            <!-- couple section begin -->
            @include('themes.default.components.couple')
            <!-- section end -->

            <!-- section begin -->
            @include('themes.default.components.countdown')
            <!-- section close -->

            <!-- greeting section begin -->
            @include('themes.default.components.greeting')
            <!-- section end -->

            <!-- event section begin -->
            @include('themes.default.components.event')
            <!-- section end -->

            <!-- comment section begin -->
            @include('themes.default.components.comment')
            <!-- section end -->

            <!-- gallery section begin -->
            @include('themes.default.components.gallery')
            <!-- section end -->
        </div>

        <!-- footer begin -->
        <footer>
            <div class="container text-center text-light">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="hs1 wow fadeInUp">Laurie<span>&amp;</span>Briant</h2>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            &copy; Copyright {{date('Y')}} - {{config('app.name')}}
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

        <a href="#" id="back-to-top"></a>
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>
    @include('themes.default.layout.footerjs')
</body>

</html>