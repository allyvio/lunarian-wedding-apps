<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

@include('argon.dashboard.layout.header')

<body>
  <!-- Sidenav -->
  @include('argon.dashboard.layout.sidenav')
  <!-- End Sidenav -->

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('argon.dashboard.componens.tapnav')
    <!-- End Topnav -->

    <!-- Header -->
    @include('argon.dashboard.componens.header')
    <!-- End Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        @include('argon.dashboard.componens.overview')
        @include('argon.dashboard.componens.performance')
      </div>
      <div class="row">
        @include('argon.dashboard.componens.teammember')
        @include('argon.dashboard.componens.todolist')
        @include('argon.dashboard.componens.progrestrack')
      </div>

      <div class="row">
        @include('argon.dashboard.componens.activityfeed')
        @include('argon.dashboard.componens.lighttable')
      </div>
      <div class="row">
        @include('argon.dashboard.componens.pagevisits')
        @include('argon.dashboard.componens.socialtraffic')
      </div>
      <!-- Footer -->
      @include('argon.dashboard.componens.footer')
    </div>
  </div>
  <!-- Argon Scripts -->
  @include('argon.dashboard.layout.footerjs')
  <!-- End Argon Scripts -->

</body>

</html>
