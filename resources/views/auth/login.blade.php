
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
        <link rel="stylesheet" href="/dist/css/ews.min.css">
        <link href="/css/login.css" rel="stylesheet">
    <style>
        .background {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: -1;
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
            width: 500px; /* Increase form width */
            padding: 50px; /* Increase form padding */
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
            text-align: center; /* Center the logo horizontally */
        }

        .logo {
            width: 80px; /* Set width and height to the same value */
            height: 80px; /* Set width and height to the same value */
            border-radius: 50%; /* Make it a circle */
            object-fit: cover; /* Ensure the image scales correctly */
        }

        .title-container {
            flex: 2;
            text-align: center;
        }

        h3 {
            font-size: 2em; /* Increase title size */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 1.2em; /* Increase label size */
        }

        .input-group {
            display: flex;
            align-items: center;
        }

        .input-group-prepend .input-group-text {
            font-size: 1.2em; /* Increase icon size */
            padding: 10px 15px;
        }

        .form-control {
            font-size: 1.2em; /* Increase input text size */
            padding: 10px 15px;
        }

        button {
            font-size: 1.2em; /* Increase button text size */
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
    <br><br><br><br><br>
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
        <div class="form-group">
            <label for="email">Email:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit" />
        </div>
        @if (Route::has('password.request'))
            <a class="password-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>
</body>
</html>

