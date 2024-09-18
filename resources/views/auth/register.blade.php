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
            <h3 class="h3">Register</h3>
        </div>
    </div>
    <div class="input-container">
      
        <input id="name" type="text" class="input  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    </div>
    <div class="input-container">
        
        <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="input-container">
        
        <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="type password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    
    <div class="input-container">
       
        <input id="password-confirm" type="password" class="input form-control" name="password_confirmation" required autocomplete="new-password"placeholder="re-type password">
    </div>

    <!-- Add other registration fields here -->

    <button>Register</button>
    <a href="{{ route('login') }}" class="password-link">Already have an account?<span style="color: black;">Log in </span> </a>
    <div class="social">
        <div class="go"><i class="fab fa-google"></i> Register with Google</div>
    </div>
</form>
@endsection