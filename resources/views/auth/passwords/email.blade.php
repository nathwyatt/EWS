
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
        <link rel="stylesheet" href="/dist/css/ews.min.css">
        <link href="/css/login.css" rel="stylesheet">
    <style>
    body, html {
        height: 100%;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }
    
    .background {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: -1;
        background: linear-gradient(to bottom, #2ed3aa, #ffffff 33%); 
    }
    
    .shape {
        height: 200px;
        width: 200px;
        background-color: rgba(255, 255, 255, 0.1);
        position: absolute;
        border-radius: 50%;
    }
    
    .shape:nth-child(1) {
        top: -50px;
        left: -50px;
    }
    
    .shape:nth-child(2) {
        bottom: -50px;
        right: -50px;
    }
    
    form {
        background-color: white;
        width: 500px;
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
        margin: auto;
        margin-top: 100px;
    }
    
    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    
    .logo-container {
        flex: 1;
        text-align: center;
    }
    
    .logo {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
    }
    
    .title-container {
        flex: 2;
        text-align: center;
    }
    
    h3 {
        font-size: 2em;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group label {
        font-size: 1.2em;
    }
    
    .input-group {
        display: flex;
        align-items: center;
    }
    
    .input-group-prepend .input-group-text {
        font-size: 1.2em;
        padding: 10px 15px;
    }
    
    .form-control {
        font-size: 1.2em;
        padding: 10px 15px;
    }
    
    button {
        font-size: 1.2em;
        padding: 10px 20px;
        background-color: #2fb107;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    
    button:hover {
        background-color: #0056b3;
    }
    
    .password-link {
        display: block;
        margin-top: 20px;
        text-align: center;
    }
    </style>
</head>
<body>
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
                        <label for="email" class="col-md-4 col-form-label text-md-end color-dark">Email Address</label>

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
    </body>
    </html>