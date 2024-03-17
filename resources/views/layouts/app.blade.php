<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Design by foolishdeveloper.com -->
    <title>EWS Muvumba</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <link rel="stylesheet" href="/dist/css/ews.min.css">
    <link href="/css/login.css" rel="stylesheet">
    <!-- End CSS -->

    <style>
        /* Additional CSS to prevent navbar height expansion */
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-light fixed-top">
        <div class="container-fluid"> 
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="brand-link">
                        <img src="/image/icon.jpg" alt="EWS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light" style="font-family: 'Aclonica'; color:#9cff69">EWs Muvumba</span>

                    </a>
                </li>
                
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="langDropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-globe"></i> Lang
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

    <!-- JavaScript -->
    <script>
        // Get the dropdown button and its menu
        var dropdownToggle = document.getElementById('langDropdown');
        var dropdownMenu = dropdownToggle.nextElementSibling;

        // Show the dropdown menu when hovering over the navbar
        dropdownToggle.addEventListener('mouseover', function() {
            dropdownMenu.classList.add('show');
        });

        // Hide the dropdown menu when mouse leaves the navbar
        dropdownMenu.addEventListener('mouseleave', function() {
            dropdownMenu.classList.remove('show');
        });
    </script>
    <!-- End JavaScript -->
</body>
</html>
