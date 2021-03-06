<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('img/brand/akad.png')}}" class="navbar-brand-img" alt="...">
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        @if(Auth::user()->hasRole('customer'))
        <?php
        $wedding = \App\Models\Wedding::where('user_id', Auth::user()->id)->first();
        $packages = $wedding->package_id;
        $package = \App\Models\Package::findOrFail($packages);
        $nav_links = [
          "Beranda" => [
            "href" => 'dashboard',
            "icon" => 'home',
            "package" => false,
            "status" => false
          ],
          "Wedding" => [
            "href" => 'wedding.index',
            "icon" => 'heart',
            "package" => false,
            "status" => true
          ],
          "Cerita" => [
            "href" => 'story.index',
            "icon" => 'book-open',
            "package" => [2, 3],
            "status" => true
          ],
          "Undangan" => [
            "href" => 'invitation.index',
            "icon" => 'bookmark',
            "package" => [2, 3],
            "status" => true
          ],
          "Acara" => [
            "href" => 'event.index',
            "icon" => 'calendar-day',
            "package" => false,
            "status" => true
          ],
          "Musik" => [
            "href" => 'music.index',
            "icon" => 'music',
            "package" => [2, 3],
            "status" => true
          ],
          "Komentar" => [
            "href" => 'comment.index',
            "icon" => 'comments',
            "package" => [2, 3],
            "status" => true
          ],
        ]
        ?>
        @foreach($nav_links as $link => $attr)
        @php
        if($attr['package'] != false && !in_array($package->id,$attr['package']))
        continue;
        @endphp
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @if($attr['status'] && $wedding->status == 'pending') disabled @endif {{ Request::routeIs($attr['href']) ? 'text-brown active' : 'text-gray' }}" href="{{route($attr['href'])}}">
              <i class="fa fa-{{$attr['icon']}}"></i>
              <span class="nav-link-text">{{$link}}</span>
            </a>
          </li>
        </ul>
        @endforeach
        @else
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('dashboard') ? 'text-brown active' : 'text-gray' }}" href="{{route('dashboard')}}">
              <i class="fa fa-home"></i>
              <span class="nav-link-text">Beranda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('admin.wedding.index') ? 'text-brown active' : 'text-gray' }}" href="{{route('admin.wedding.index')}}">
              <i class="fa fa-columns"></i>
              <span class="nav-link-text">Data Wedding</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('music.indexAdmin') ? 'text-brown active' : 'text-gray' }}" href="{{route('music.indexAdmin')}}">
              <i class="fa fa-music"></i>
              <span class="nav-link-text">Data Music</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('package.index') ? 'text-brown active' : 'text-gray' }}" href="{{route('package.index')}}">
              <i class="fa fa-book"></i>
              <span class="nav-link-text">Data Package</span>
            </a>
          </li>
        </ul>
        @endif
      </div>
    </div>
  </div>
</nav>
