@extends('layout.wrapper-plain')
@section('plain-content')
<div class="header bg-lightbrown py-7 py-lg-8">
  <div class="container">
    <div class="header-body text-center mb-7">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
          <h1 class="text-white">Selamat datang!</h1>
          <p class="text-lead text-white">Silahkan login terlebih dahulu dan buat undangan pernikalahan kalian dalam bentuk website.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="separator separator-bottom separator-skew zindex-100">
    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <polygon class="fill-brown" points="2560 0 2560 100 0 100"></polygon>
    </svg>
  </div>
</div>
<div class="container-fluid mt--8 pb-5 bg-brown">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
      <div class="card bg-secondary border-0 mb-0">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="card-header bg-transparent">
          <h5 class="h2 m-0">Login</h5>
        </div>
        <div class="card-header bg-transparent pb-5">
          <div class="text-muted text-center mt-2 mb-3"><small>Masuk Dengan</small></div>
          <div class="btn-wrapper text-center">
            <a href="{{ url('google') }}" class="btn btn-neutral btn-icon">
              <span class="btn-inner--icon"><img src="/img/icons/common/google.svg"></span>
              <span class="btn-inner--text">Google</span>
            </a>
          </div>
        </div>
        <div class="card-body px-lg-5 py-lg-5">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <label for="email" class="form-control-label">{{ __('E-Mail Address') }}</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail" autofocus>
              @error('email')
              <span class="invalid-feedback" role="alert">
                {{$message}}
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="password" class="form-control-label">{{ __('Password') }}</label>
              @if (Route::has('password.request'))
              <small class="float-right">
                <a href="{{ route('password.request') }}" class="text-brown">
                  {{ __('Forgot Your Password?') }}
                </a>
              </small>
              @endif
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                {{$message}}
              </span>
              @enderror
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-brown">
                {{ __('Login') }}
              </button>
            </div>
          </form>
          <div class="text-center small pt-4">Belum punya akun? <a href="{{route('register')}}" class="text-brown">Daftar</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
