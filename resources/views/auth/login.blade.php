
<!DOCTYPE html>
<html>

<head>
    <title>EWS-Login</title>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <style>
   body {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: sans-serif;
        line-height: 1.5;
        min-height: 100vh;
        background: linear-gradient(to bottom, #4caf6f 33.33%, white 33.33%, white 100%);
        flex-direction: column;
        margin: 0;
    }


    .main {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        padding: 10px 20px;
        transition: transform 0.2s;
        width: 500px;
        text-align: center;
    }

    h1 {
        color: #4CAF50;
    }

    label {
        display: block;
        width: 100%;
        margin-top: 10px;
        margin-bottom: 5px;
        text-align: left;
        color: #555;
        font-weight: bold;
    }


    input {
        display: block;
        width: 100%;
        margin-bottom: 15px;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    button {
        padding: 15px;
        border-radius: 10px;
        margin-top: 15px;
        margin-bottom: 15px;
        border: none;
        color: white;
        cursor: pointer;
        background-color: #4caf6f;
        width: 100%;
        font-size: 16px;
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

    .wrap {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>

</head>

<body>
      <div class="main">
        <div class="header">
            <div class="logo-container">
                <img src="/image/icon.jpg" alt="Logo" class="logo">
            </div>
            <div class="title-container">
                <h1 class="h3">@lang('login.login')</h1>
            </div>
            <h3>Enter your login credentials</h3>
        </div>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                  <label for="first">
                        Username:
                  </label>
                  <input type="text" 
                         id="email" 
                         name="email" 
                         placeholder="Enter your Username" required @error('email') is-invalid @enderror>
                         @error('email')
                         <div class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </div>
                         @enderror
                  <label for="password">
                        Password:
                  </label>
                  <input type="password"
                         id="password" 
                         name="password"
                         placeholder="Enter your Password" required @error('password') is-invalid @enderror>
                         @error('password')
                         <div class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </div>
                         @enderror

                  <div class="wrap">
                        <button type="submit"
                                onclick="solve()">
                              Submit
                        </button>
                  </div>
            </form>
            <p>{{ __('Forgot Your Password?') }}
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}"
                     style="text-decoration: none;">
                     {{ __('Reset password here') }}
                  </a>
                @endif
            </p>
      </div>
</body>

</html>