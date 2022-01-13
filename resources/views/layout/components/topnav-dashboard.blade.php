<!-- Topnav -->
<nav class="navbar navbar-top navbar-expand border-bottom">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar links -->
      <ul class="navbar-nav align-items-center ml-md-auto order-1 order-md-2">
        <li class="nav-item d-xl-none">
          <!-- Sidenav toggler -->
          <div class="pr-3 sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </li>
      </ul>
      @if(Auth::user()->hasRole('customer'))
      <ul class="navbar-nav align-items-center order-2 order-md-1">
        <li class="nav-item">
          <a href="{{route('wedding.page',Auth::user()->wedding->slug)}}" target="_blank" class="nav-link text-primary font-weight-bold text-sm p-0">
            <span class="btn-inner--icon"><i class="ni ni-world"></i></span>
            <span class="btn-inner--text">{{request()->getHttpHost().'/'. Auth::user()->wedding->slug}}</span>
          </a>
        </li>
      </ul>
      @endif
      <ul class="navbar-nav align-items-center ml-auto ml-md-0 order-3">
        <li class="nav-item dropdown">
          <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <div class="media-body ml-2 d-block">
                <span class="mb-0 text-sm  font-weight-bold">Hi, {{Auth::user()->name}}</span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>