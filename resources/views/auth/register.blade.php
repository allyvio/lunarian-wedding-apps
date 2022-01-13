@extends('layout.wrapper-plain')
@section('plain-content')
<div class="header bg-gradient-primary py-7 py-lg-8">
    <div class="container">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                    <h1 class="text-white">Buat Akun Baru</h1>
                    <p class="text-lead text-white">Gunakan formulir luar biasa ini untuk masuk atau membuat akun baru di proyek Anda secara gratis.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>
<div class="container-fluid mt--8 pb-5 bg-default">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary border-0 mb-0">
                <div class="card-header bg-transparent">
                    <h5 class="h2 m-0">Daftar</h5>
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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-control-label">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                {{$message}}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-control-label">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{$message}}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-control-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="form-control-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                        <div class="text-center small pt-4">Sudah punya akun? <a href="{{route('login')}}">Masuk</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
