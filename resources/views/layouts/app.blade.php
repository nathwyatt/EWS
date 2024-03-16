<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design by foolishdeveloper.com -->
    <title>EWS Muvumba</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <link rel="stylesheet" href="/dist/css/ews.min.css">
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/login.css " rel="stylesheet">

    <!--Stylesheet-->

</head>
<body>
    <nav class=" navbar navbar-light fixed-top">
      <div class="container-fluid"> 
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="brand-link">
                        <img src="/image/icon.jpg" alt="EWS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light" style="font-family: 'Aclonica'; color:#9cff69">EWS Muvumba</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle" type="button" id="langDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe "></i> Lang
                        </button>
                        <div class="dropdown-menu" aria-labelledby="langDropdown">
                            <a class="dropdown-item" href="locale/en"><i class="fas fa-flag-usa"></i> English</a>
                            <a class="dropdown-item" href="locale/fr"><i class="fas fa-flag-france"></i> French</a>
                        </div>
                    </div>
                </li>
            </ul>
      </div>
    </nav>
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>

