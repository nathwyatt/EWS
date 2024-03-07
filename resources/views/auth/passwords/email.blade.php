@extends('layouts.app')

@section('content')
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<div class="header">
        <div class="logo-container">
            <img src="/image/icon.jpg" alt="Logo" class="logo">
        </div>
        <div class="title-container">
            <h3 class="h3">Reset Password</h3>
        </div>
    </div>
    <div class="input-container">
   

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end" style="color: dark;">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                                <button type="submit" class="btn btn-primary"  style="background-color: lightgreen;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                
                    </form>
                </div>
            </div>
        </div>
    
@endsection
