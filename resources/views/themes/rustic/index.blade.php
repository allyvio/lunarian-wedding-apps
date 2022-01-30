<!DOCTYPE html>
<html lang="en">
@include('themes.rustic.layout.header')

<body>
    @foreach($music as $data)
    @if($data->status == 1)
    <audio src="{{asset('storage/'.DB::table('music')->where('id', $data->music_id)->value('music'))}}" autoplay loop="loop"></audio>
    @endif
    @endforeach
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
        @include('themes.rustic.components.hero')
        <!--End hero section-->
        <!--Friends section-->
        @include('themes.rustic.components.couple')
        <!--End friends section-->
        <!--Story section-->
        @if($wedding->package_id != 1)
        @include('themes.rustic.components.story')
        @endif
        <!--End story section-->
        <!--Date section-->
        @include('themes.rustic.components.countdown')
        <!--End date section-->
        <!--Wedding section-->
        @include('themes.rustic.components.event')
        <!--End wedding section-->
        <!--Wedding section-->
        @include('themes.rustic.components.quote')
        <!--End wedding section-->
        <!--Wedding section-->
        @include('themes.rustic.components.album')
        <!--End wedding section-->
        <!-- rsvp popup begin -->
        @if($wedding->invitation)
        @include('themes.rustic.components.rsvp.show')
        @include('themes.rustic.components.comments.form')
        @else
        @include('themes.rustic.components.rsvp.form')
        @endif
        <!-- section end -->
        <!--Comment section-->
        @if($wedding->package_id != 1)
        @include('themes.rustic.components.comments.show')
        @endif
        <!--End Comment section-->
        <!--Just married section -->
        @include('themes.rustic.components.protokol')
        <!--End just married section-->
        <!--Just married section -->
        @include('themes.rustic.components.justmarried')
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
    @include('themes.rustic.layout.footerjs')
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
