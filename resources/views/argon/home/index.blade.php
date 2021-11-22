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

@include('argon.home.layout.header')

<body>
  <!-- Navabr -->
  @include('argon.home.layout.topnav')
  <!-- End Navabr -->
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    @include('argon.home.componens.header')
    <!-- Complete -->
    @include('argon.home.componens.complete')
    <!-- End Complete -->
    <!-- Based -->
    @include('argon.home.componens.based')
    <!-- End Based -->
    <!-- Features -->
    @include('argon.home.componens.features')
    <!-- End Features -->
    <!-- Pages -->
    @include('argon.home.componens.pages')
    <!-- End Pages -->
    <!-- Lovable -->
    @include('argon.home.componens.lovable')
    <!-- End Lovable -->
    <!-- Nucleoicons -->
    @include('argon.home.componens.nucleoicons')
    <!-- End Nucleoicons -->
    <!-- Awesome -->
    @include('argon.home.componens.awesome')
    <!-- End Awesome -->
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  @include('argon.home.layout.topnav')
  <!-- End Argon Scripts -->

</body>

</html>
