<!DOCTYPE html>
<html lang="en" class="no-js">

@include('themes.classic.layout.header')

<body>
    @foreach($music as $data)
    @if($data->status == 1)
    <audio src="{{asset('storage/'.DB::table('music')->where('id', $data->music_id)->value('music'))}}" autoplay loop="loop"></audio>
    @endif
    @endforeach
    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- /Loading animation -->

    <div id="main-container">

        <!-- Header -->
        <header id="header" class="header">
            <div class="container">
                <div class="logo-container">
                    <div class="header-logo">{{$wedding->calon_wanita}}<span class="main-color"> &amp;</span> {{$wedding->calon_pria}}</div>
                </div>
                <!-- <div class="header-date">
                    <p>{{date('l, d',strtotime($wedding->main_date))}} <span class="main-color">{{date('F',strtotime($wedding->main_date))}} </span> {{date('Y',strtotime($wedding->main_date))}} </p>
                </div> -->
            </div>
        </header>
        <!-- /Header -->

        <div class="sections">
            <!-- Home Section -->
            @include('themes.classic.components.couple')
            <!-- /Home Section -->

            <!-- Our Day Section -->
            @include('themes.classic.components.countdown')
            <!-- /Our Day Section -->

            <!-- Our Story Section -->
            @if($wedding->package_id != 1)            
            @include('themes.classic.components.story')
            @endif
            <!-- /Our Story Section -->

            <!-- Wedding Events Section -->
            @include('themes.classic.components.event')
            <!-- /Wedding Events Section -->

            <!-- Wedding Gallery Section -->
            @include('themes.classic.components.quote')
            <!-- /Wedding Gallery Section -->

            <!-- Wedding Gallery Section -->
            @include('themes.classic.components.gallery')
            <!-- /Wedding Gallery Section -->

            <!-- rsvp popup begin -->
            @if($wedding->invitation)
            @include('themes.classic.components.rsvp.show')
            @include('themes.classic.components.comments.form')
            @else
            @include('themes.classic.components.rsvp.form')
            @endif
            <!-- section end -->

            <!--Comment Section -->
            @if($wedding->package_id != 1)
            @include('themes.classic.components.comments.show')
            @endif
            <!-- Comment Section -->

            <!--Protokol Section -->
            @include('themes.classic.components.protokol')
            <!-- Protokol Section -->

            <!-- Footer (Thank You block) -->
            <footer id="thanks" class="footer">
                <div id="footer-image-block" class="footer-image-block" style="background-attachment: fixed; background-position: 50%;" data-stellar-background-ratio="0.3">
                    <div class="footer-mask"></div>
                </div>

                <div class="footer-title">
                    <h2>Terimakasih!</h2>
                </div>
            </footer>
            <!-- /Footer (Thank You block) -->

        </div>

    </div>
    <!-- /Main Container -->

    @include('themes.classic.layout.footerjs')
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