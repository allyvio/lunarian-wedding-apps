<!DOCTYPE html>
<html>

@include('layout.header')

<body>
  <!-- Sidenav -->
  @include('layout.sidenav')
  <!-- End Sidenav -->

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layout.topnav-dashboard')
    <!-- End Topnav -->

    <!-- Header -->
    @include('pages.dashboard.components.section-header')
    <!-- End Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      @yield('dashboard-content')
      <!-- Footer -->
      <!-- @include('argon.dashboard.componens.footer') -->
    </div>
  </div>
  <!-- Argon Scripts -->
  @include('layout.footerjs')
  <!-- End Argon Scripts -->

</body>

</html>
