<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('themes.default.layout.header')

<body id="homepage">
    <!-- Music -->
    
    <div id="wrapper">
        <div id="content" class="no-bottom no-top">
            <!-- hero section begin -->
            @include('themes.default.components.hero')
            <!-- section end -->

            <!-- couple section begin -->
            @include('themes.default.components.couple')
            <!-- section end -->

            <!-- story section begin -->
            @include('themes.default.components.story')
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

            <!-- quote section begin -->
            @include('themes.default.components.quote')
            <!-- section end -->

            <!-- gallery section begin -->
            @include('themes.default.components.gallery')
            <!-- section end -->

            <!-- rsvp popup begin -->
            @if($wedding->invitation)
            @include('themes.default.components.rsvp.show')
            @include('themes.default.components.comments.form')
            @else
            @include('themes.default.components.rsvp.form')
            @endif
            <!-- section end -->
            <!-- comment section begin -->
            @include('themes.default.components.comments.show')
            <!-- section end -->
            @include('themes.default.components.protokol')
        </div>
        
        <!-- footer begin -->
        @include('themes.default.components.footer')
        <!-- footer close -->
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
