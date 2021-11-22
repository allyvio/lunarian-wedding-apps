<!DOCTYPE html>
<html lang="en" class="no-js">

@include('themes.themes3.layout.header')

<body>
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
            <div class="container clearfix">
                <div class="logo-container">
                    <div class="header-logo">Bryan <span class="main-color">&amp;</span> Sarah</div>
                </div>

                <div class="header-date mobile-hidden">
                    <p>Sabtu, 23 <span class="main-color">September</span> 2017</p>
                </div>
                <a class="menu-toggle mobile-visible">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </header>
        <!-- /Header -->

        <!-- Site Navigation -->
        @include('themes.themes3.layout.topnav')
        <!-- /Site Navigation -->

        <div class="sections">
            <!-- Home Section -->
            @include('themes.themes3.componens.home')
            <!-- /Home Section -->

            <!-- Our Day Section -->
            @include('themes.themes3.componens.day')
            <!-- /Our Day Section -->

            <!-- Our Story Section -->
            @include('themes.themes3.componens.story')
            <!-- /Our Story Section -->

            <!-- Wedding Events Section -->
            @include('themes.themes3.componens.weddingevents')
            <!-- /Wedding Events Section -->

            <!-- Gallery Section -->
            @include('themes.themes3.componens.gallery')
            <!-- /Gallery Section -->

            <!-- RSVP Section -->
            @include('themes.themes3.componens.rsvp')
            <!-- /RSVP Section -->
            <!-- RSVP Section -->
            @include('themes.themes3.componens.comment')
            <!-- /RSVP Section -->

            <!-- Footer (Thank You block) -->
            <footer id="thanks" class="footer">
                <div id="footer-image-block" class="footer-image-block"
                    style="background-image: url(img/ourlove/hero.jpg); background-attachment: fixed; background-position: 50%;"
                    data-stellar-background-ratio="0.3">
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

    @include('themes.themes3.layout.footerjs')
</body>

</html>