<!DOCTYPE html>
<html lang="en" class="no-js">

@include('themes.ourlove.layout.header')

<body>
    @foreach($musik as $data)
    @if($data->status == 1)
    <audio src="{{asset('storage/'.$data->music)}}" id="my_audio" loop="loop"></audio>
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
                    <div class="header-logo">{{$wedding->calon_wanita}}<span class="main-color">&amp;</span> {{$wedding->calon_pria}}</div>
                </div>
                <div class="header-date">
                    <p>{{date('l, d',strtotime($wedding->main_date))}} <span class="main-color">{{date('F',strtotime($wedding->main_date))}} </span> {{date('Y',strtotime($wedding->main_date))}} </p>
                </div>
            </div>
        </header>
        <!-- /Header -->

        <div class="sections">
            <!-- Home Section -->
            @include('themes.ourlove.components.couple')
            <!-- /Home Section -->

            <!-- Our Day Section -->
            @include('themes.ourlove.components.countdown')
            <!-- /Our Day Section -->

            <!-- Our Story Section -->
            @include('themes.ourlove.components.story')
            <!-- /Our Story Section -->

            <!-- Wedding Events Section -->
            @include('themes.ourlove.components.event')
            <!-- /Wedding Events Section -->
            <!-- rsvp popup begin -->
            @if($wedding->invitation)
            @include('themes.ourlove.components.rsvp.show')
            @else
            @include('themes.ourlove.components.rsvp.form')
            @endif
            <!-- section end -->
            <!--Comment Section -->
            @include('themes.ourlove.components.comment')
            <!-- Comment Section -->
            <!--Protokol Section -->
            @include('themes.ourlove.components.protokol')
            <!-- Protokol Section -->

            <!-- Footer (Thank You block) -->
            <footer id="thanks" class="footer">
                <div id="footer-image-block" class="footer-image-block" data-stellar-background-ratio="0.3">
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

    @include('themes.ourlove.layout.footerjs')
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
        //music
        window.onload=function(){
          document.getElementById("my_audio").play();
        }
    </script>
</body>

</html>
