<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{asset('img/brand/akad.png')}}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="/">
              <img src="{{asset('img/brand/akad.png')}}">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <ul class="navbar-nav mr-auto">
        @if(Auth::check())
        <li class="nav-item">
          <a href="/" class="nav-link">
            <span class="nav-link-inner--text">Home</span>
          </a>
        </li>
        @else
        <li class="nav-item">
          <a href="/" class="nav-link">
            <span class="nav-link-inner--text">Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('wedding.create')}}" class="nav-link">
            <span class="nav-link-inner--text">Wedding</span>
          </a>
        </li>
        @endif
        <!-- <li class="nav-item">
          <a href="{{route('wedding.create')}}" class="nav-link">
            <span class="nav-link-inner--text">Package</span>
          </a>
        </li> -->
      </ul>
      <ul class="navbar-nav align-items-lg-center ml-lg-auto">
        @if(Auth::check())
        <li class="nav-item">
          <a href="{{route('dashboard')}}" class="nav-link text-center font-weight-bold my-2 my-lg-0">
            <span class="nav-link-inner--text">Dashboard</span>
          </a>
        </li>
        @else
        <li class="nav-item">
          <a href="{{route('register')}}" class="nav-link text-center font-weight-bold my-2 my-lg-0">
            <span class="nav-link-inner--text">Register</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('login')}}" class="btn btn-brown2 btn-block">
            <span class="nav-link-inner--text">Login</span>
          </a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>