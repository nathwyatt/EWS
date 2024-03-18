
@extends('layouts.app')

@section('content')

<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form method="POST" action="{{ route('login') }}">
                        @csrf
    <div class="header">
        <div class="logo-container">
            <img src="/image/icon.jpg" alt="Logo" class="logo">
        </div>
        <div class="title-container">
            <h3 class="h3">@lang('login.login')</h3>
        </div>
    </div>
    <div class="input-container">
        <img src="assets/img/email.png" alt="Email Avatar" class="avatar">
        <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="input-container">
        <img src="assets/img/password.png" alt="Password Avatar" class="avatar">
        <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

        <button>Log In</button>
    @if (Route::has('password.request'))
                                    <a class="password-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
    <div class="social">
        <div class="go"><i class="fab fa-google"></i> Google</div>
        <div class="fb"><i class="fab fa-register"> <a href="{{ route('register') }}"> @lang('login.register') </a> </i></div>
    </div>
</form>
@endsection
