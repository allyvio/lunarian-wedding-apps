<!DOCTYPE html>
<html lang="en">
@include('themes.themes2.layout.header')

<body>
    <!-- Preloader -->
    <div class="loader">
        <!-- Preloader inner -->
        <div class="loader-inner">
            <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <circle class="spinner" cx="50" cy="50" r="21" fill="#ffffff" stroke-width="2" />
            </svg>
        </div>
        <!-- End preloader inner -->
    </div>
    <!-- End preloader-->
    <!--Wrapper-->
    <div class="wrapper">
        <!--Hero section-->
        @include('themes.themes2.componens.hero')
        <!--End hero section-->
        <!--Story section-->
        @include('themes.themes2.componens.story')
        <!--End story section-->
        <!--Date section-->
        @include('themes.themes2.componens.date')
        <!--End date section-->
        <!--Wedding section-->
        @include('themes.themes2.componens.wedding')
        <!--End wedding section-->
        <!--Album section-->
        @include('themes.themes2.componens.album')
        <!--End Album section-->
        <!--Gift section-->
        @include('themes.themes2.componens.gift')
        <!--End gift section-->
        <!--Friends section-->
        @include('themes.themes2.componens.friends')
        <!--End friends section-->
        <!--Accomadation section-->
        @include('themes.themes2.componens.accomadation')
        <!--End accommodation section-->
        <!--RSVP section-->
        @include('themes.themes2.componens.rsvp')
        <!--End RSVP section-->
        <!--Comment section-->
        @include('themes.themes2.componens.comment')
        <!--End Comment section-->
        <!--Just married section -->
        @include('themes.themes2.componens.justmarried')
        <!--End just married section-->
        <!--Footer section -->
        <footer class="footer pt-70 pb-70">
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p class="uppercase heavy normal">&copy; 2017 all right reserved - a product of mutationthemes.
                        </p>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
        </footer>
        <!--End footer section -->
    </div>
    <!-- End wrapper-->
    <!--Javascript-->
    @include('themes.themes2.layout.footerjs')
    <!-- Google analytics -->
    <!-- End google analytics -->
</body>

</html>