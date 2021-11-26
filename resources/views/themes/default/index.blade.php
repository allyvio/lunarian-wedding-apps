<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('themes.default.layout.header')

<body id="homepage">
    <div id="wrapper">
        <div id="content" class="no-bottom no-top">
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
            <!-- rsvp popup begin -->
            @if($wedding->invitation)
            @include('themes.default.components.rsvp.show')
            @else
            @include('themes.default.components.rsvp.form')
            @endif
            <!-- section end -->
            <!-- gallery section begin -->
            <!-- @include('themes.default.components.gallery') -->
            <!-- section end -->

            <!-- comment section begin -->
            @include('themes.default.components.comments.form')
            @include('themes.default.components.comments.show')
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
    @stack('scripts')
    <script>
        if ('{{session()->has("error")}}') {
            var message = '{{session()->get("error")}}';
            iziToast.error({
                title: 'Invalid',
                message: message,
                position: 'topCenter'
            });
        }
    </script>
</body>

</html>