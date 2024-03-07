<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design by foolishdeveloper.com -->
    <title>EWS Muvumba</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #finfo_buffer;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }


        form {
            width: 100%;
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 30px 20px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }
      .header {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px; 
}

.logo-container {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    margin-right: 10px; 
}

.logo {
    display: block;
    max-width: 100px; 
    height: auto;
    height: 100px;
    width: 100px;
    position: absolute;
    border-radius: 50%;
    padding: 20px;
    
}


.title-container {
    flex: 1;
    display: flex;
    align-items: left;
    justify-content: flex-start;
    
}
.h3{
    color:#9cff69;
    font-family: 'Aclonica';
}

form h3 {
    font-size: 24px;
    font-weight: 500;
    line-height: 30px;
    margin: 0; 
}
.input-container {
    display: flex;
    align-items: center;
    background-color: rgba(255, 255, 255, 0.2); 
    border-radius: 10px;
    padding: 10px;
    margin-bottom: 15px;
}


.avatar {
    width: 24px; 
    height: 24px;
    margin-right: 10px; 
}
.input {
    flex: 1; 
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    background-color: transparent; 
    transition: background-color 0.3s ease;
    backdrop-filter: blur(10px); 
    box-shadow: 0 0 20px rgba(8, 7, 16, 0.6);
}

        button {
            width: 70%;
            margin-left: 65px;
            background-color:lightgreen;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            font-family: 'Aclonica';
            
        }

        .password-link {
            color: lightgreen;
            font-size: 12px;
            text-decoration: none;
            margin-top: 10px;
            display: block;
        }

        .social {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .social div {
            background: red;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgb(128, 128, 128);
            color: #eaf0fb;
            text-align: center;
            margin-right: 10px;
        }

        .social div:hover {
            background-color:lightgreen;
        }

        .social .fb {
            margin-left: 0;
        }

        .social i {
            margin-right: 4px;
        }

    </style>
</head>
<body>
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
            <h3 class="h3">Login</h3>
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
        <div class="fb"><i class="fab fa-register"> <a href="{{ route('register') }}"> register </a> </i></div>
    </div>
</form>
</body>
</html>
