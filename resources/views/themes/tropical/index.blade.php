<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('themes.tropical.layout.header')

<body id="homepage">
    <!-- Music -->
    @foreach($music as $data)
    @if($data->status == 1)
    <audio src="{{asset('storage/'.DB::table('music')->where('id', $data->music_id)->value('music'))}}" autoplay loop="loop"></audio>
    @endif
    @endforeach
    <div id="wrapper">
        <div id="content" class="no-bottom no-top">
            <!-- hero section begin -->
            @include('themes.tropical.components.hero')
            <!-- section end -->

            <!-- couple section begin -->
            @include('themes.tropical.components.couple')
            <!-- section end -->

            <!-- story section begin -->
            @if($wedding->package_id != 1)
            @include('themes.tropical.components.story')
            @endif
            <!-- section end -->

            <!-- section begin -->
            @include('themes.tropical.components.countdown')
            <!-- section close -->

            <!-- greeting section begin -->
            @include('themes.tropical.components.greeting')
            <!-- section end -->

            <!-- event section begin -->
            @include('themes.tropical.components.event')
            <!-- section end -->

            <!-- quote section begin -->
            @include('themes.tropical.components.quote')
            <!-- section end -->

            <!-- gallery section begin -->
            @include('themes.tropical.components.gallery')
            <!-- section end -->

            <!-- rsvp form begin -->
            @if($wedding->invitation)
            @include('themes.tropical.components.rsvp.show')
            @include('themes.tropical.components.comments.form')
            @else
            @include('themes.tropical.components.rsvp.form')
            @endif
            <!-- section end -->
            <!-- comment section begin -->
            @if($wedding->package_id != 1)
            @include('themes.tropical.components.comments.show')
            @endif
            <!-- section end -->
            @include('themes.tropical.components.protokol')
        </div>

        <!-- footer begin -->
        @include('themes.tropical.components.footer')
        <!-- footer close -->
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>
    @include('themes.tropical.layout.footerjs')
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
