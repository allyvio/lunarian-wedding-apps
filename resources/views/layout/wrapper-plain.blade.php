<!DOCTYPE html>
<html>

@include('layout.components.header')

<body>
    @include('sweetalert::alert')
    <!-- Topnav -->
    @include('layout.components.topnav-plain')
    <!-- End Topnav -->

    <!-- Main content -->
    <div class="main-content">
        <!-- Page content -->
        @yield('plain-content')
    </div>
    
    <!-- Argon Scripts -->
    @include('layout.components.footerjs')
    <!-- End Argon Scripts -->
    @include('layout.components.footer')

</body>

</html>