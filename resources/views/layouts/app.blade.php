<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design by foolishdeveloper.com -->
    <title>EWS Muvumba</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<style>
    @media screen {
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

    form *,
    .password-link {
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

    .h3 {
        color: #9cff69;
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
        background-color: lightgreen;
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
        background-color: lightgreen;
    }

    .social .fb {
        margin-left: 0;
    }

    .social i {
        margin-right: 4px;
    }
}
</style>
</head>
<body>
   
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>