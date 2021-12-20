<!DOCTYPE html>
<html>

@include('layout.components.header')
<body>
    <!-- Main content -->
    <div class="main-content">
        <!-- Topnav -->
        @include('layout.components.topnav-dashboard-alt')
        <!-- End Topnav -->

        <!-- Page content -->
        <div class="container-fluid mt-5">
            @yield('dashboard-alt-content')
            <!-- Footer -->
            <!-- @include('layout.components.footer') -->
        </div>
    </div>
    <!-- Argon Scripts -->
    @include('layout.components.footerjs')
    <!-- End Argon Scripts -->

</body>

</html>