<!DOCTYPE html>
<html lang="en">
@include('themes.destiny.layout.header')

<body>
    <!-- Preloader -->
    <div class="loader">
        <!-- Preloader inner -->
        <div class="loader-inner">
            <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <circle class="spinner" cx="50" cy="50" r="21" fill="#ffffff" stroke-width="2" />
            </svg>
        </div>
        <!-- End preloader inner -->
    </div>
    <!-- End preloader-->
    <!--Wrapper-->
    <div class="wrapper">
        <!--Hero section-->
        @include('themes.destiny.components.hero')
        <!--End hero section-->
        <!--Friends section-->
        @include('themes.destiny.components.couple')
        <!--End friends section-->
        <!--Story section-->
        @include('themes.destiny.components.story')
        <!--End story section-->
        <!--Date section-->
        @include('themes.destiny.components.countdown')
        <!--End date section-->
        <!--Wedding section-->
        @include('themes.destiny.components.event')
        <!--End wedding section-->
        <!-- rsvp popup begin -->
        @if($wedding->invitation)
        @include('themes.destiny.components.rsvp.show')
        @else
        @include('themes.destiny.components.rsvp.form')
        @endif
        <!-- section end -->
        <!--Comment section-->
        @include('themes.destiny.components.comment')
        <!--End Comment section-->
        <!--Just married section -->
        @include('themes.destiny.components.protokol')
        <!--End just married section-->
        <!--Just married section -->
        @include('themes.destiny.components.justmarried')
        <!--End just married section-->
        <!--Footer section -->
        <footer class="footer pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p class="uppercase heavy normal">&copy; Copyright {{date('Y')}} - {{config('app.name')}}.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--End footer section -->
    </div>
    <!-- End wrapper-->
    @include('themes.destiny.layout.footerjs')
    @stack('scripts')
    <script>
        if ('{{session()->has("error")}}') {
            var message = '{{session()->get("error")}}';
            iziToast.error({
                displayMode: 'replace',
                title: 'Invalid',
                message: message,
                position: 'topCenter',
            });
        }
    </script>
</body>

</html>
