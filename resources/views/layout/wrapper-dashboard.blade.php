<!DOCTYPE html>
<html>

@include('layout.components.header')

<body>
  <!-- Sidenav -->
  @include('layout.components.sidenav')
  <!-- End Sidenav -->

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layout.components.topnav-dashboard')
    <!-- End Topnav -->

    <!-- Header -->
    @yield('dashboard-header')
    <!-- End Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      @yield('dashboard-content')
      <!-- Footer -->
      <!-- @include('layout.components.footer') -->
    </div>
  </div>
  <!-- Argon Scripts -->
  @include('layout.components.footerjs')
  <!-- End Argon Scripts -->

  <!-- Alert -->
  @include('sweetalert::alert')
  <!-- End Alert -->


</body>

</html>
