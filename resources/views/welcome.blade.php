<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="shortcut icon" href="/image/icon.png" type="image/x-icon">
    <meta name="author" content="">
    <title>EWS Muvumba</title>

    <!-- CSS Stylesheets -->
    <link href="frontend/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/css/font-awesome.min.css" rel="stylesheet">
    <link href="frontend/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="frontend/css/owl.carousel.css">
    <link rel="stylesheet" href="frontend/css/owl.theme.css">
    <link rel="stylesheet" href="frontend/css/owl.transitions.css">
    <link href="frontend/css/style.css" rel="stylesheet">
    <link href="frontend/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="frontend/css/color/green.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/color/light-red.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/color/blue.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/color/light-blue.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/color/yellow.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/color/light-green.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href="http://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">

    <!-- Modernizer js -->
    <script src="frontend/js/modernizr.custom.js"></script>

    <style>
        /* .card {
    border: 1px solid #ccc; /* Add a border to each card */
    margin-bottom: 20px; /* Add some margin between cards */
}

.card-img-top {
    max-width: 100%; /* Ensure the image fits inside the card */
    height: auto;
}
.row {
    padding: 40px; /* Add padding to separate columns */
} */

.card {
    border: none; /* Remove border from cards */
    margin-bottom: 20px; /* Add margin between cards */
}

.card-img-top {
    max-width: 100%; /* Ensure the image fits inside the card */
    height: auto;
}

        </style>
</head>

<body class="index">
    <!-- Navigation Section -->
    <section class="portfolio-section-1">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-icon-bar">
                    <img src="/image/icon.png" alt="EWSLogo" class="img-size-100 img-circle mr-3 navbar-brand">
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand page-scroll" href="">EWS</a>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#portfolio">Home</a></li>
                        <li><a class="page-scroll" href="#service">Services</a></li>
                        <li><a class="page-scroll" href="#about-us">About</a></li>
                        <li><a class="page-scroll" href="#team">Team</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <li>
                            @guest
                            @if (Route::has('login'))
                            <a class="page-scroll" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif
                        </li>
                        <li>
                            @if (Route::has('register'))
                            <a class="page-scroll" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="portfolio" style="background: linear-gradient(to bottom, #cdcfcf, #c2c5c7); margin: 0; padding: 0;">
        <div class="container bg-green">

                    <div class="feature-content text-center" style="position: relative; z-index: 1;">
                        @foreach ($about as $item)
                        <div class="section-title ">
                            <h3>{{ $item->name }}</h3>
                        </div>
                        <p>Welcome to Early warning system Muvumba website</p>
                        @endforeach
                        <h4>Muvumba catchment</h4>
                        <p>This is the system designed to provide early warning on Muvuba river based on different phenomena such as floods and droughts. The system provides real-time data to the dashboard for analytics and predictions, and it also sends notifications to users living around the river. The real-time data is collected from sensors placed across different parts of the river.</p>
                    </div>
            </div>
        </div>
        <section id="news" style="padding: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" style="background: linear-gradient(to bottom, #b7f863); margin: 0; padding: 0;">
                        <div class="card">
                            <img src="image/photo 1.jpg" alt="Floods in Nsheke" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Floods in Nsheke</h5>
                                <p class="card-text">4 months ago deseaster floods in nsheke.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="background: linear-gradient(to bottom, #97838b); margin: 0; padding: 0;">
                        <div class="card">
                            <img src="image/photo 1.jpg" alt="News Title 2" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">UR team visit</h5>
                                <p class="card-text">ur team visit the floods areas in nyagatare district</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="background: linear-gradient(to bottom, #e47c06); margin: 0; padding: 0;">
                        <div class="card">
                            <img src="image/photo 1.jpg" alt="News Title 3" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Methodology used</h5>
                                <p class="card-text">ML methodology used for solving floods in nyagatare</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more cards for additional news items -->
                </div>
            </div>
        </section>
        
    </section>
    
    

    <!-- Start Feature Section -->
        <section id="service" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>system features</h3>
                            <p>Early warning system MUVUMBA has different features</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-magic"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">IOT system</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-css3"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">ML Model</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-wordpress"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">System dashbord</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-plug"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Notification system</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-joomla"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Android system</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-cube"></i>
                                    <div class="border"></div>
                                </div>
                               
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    
                </div><!-- /.row -->
            
            </div><!-- /.container -->
        </section>
        <!-- End Feature Section -->
    
    
    
    <!-- Start Fun Facts Section -->
    <section id="about-us"style="background:#faa3cd">
        <div class="container">
            <div class="section-title text-center">
                <h3>About {{ $item->name }}</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="feature">
                        <img src="image/photo 1.jpg" alt="station Image" class="img-responsive">
                        <div class="feature-content">
                            <!-- You can add more content here if needed -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4>Muvumba catchment</h4>
                    <p>This is the system designed to provide early warning on Muvuba river based on different phenomena such as floods and droughts. The system provides real-time data to the dashboard for analytics and predictions, and it also sends notifications to users living around the river. The real-time data is collected from sensors placed across different parts of the river.</p>
                </div>
            </div>
        </div>
        
        </div>
    </section>
    <!-- End Fun Facts Section -->



    <!-- Start Team Member Section -->
    <section id="team" class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3>Our Team</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div id="team-section">
                    
                                <div class="our-team">

                                    <div class="team-member">
                                        <img src="avatar/aime.jpeg" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>N Simplice</h4>
                                            <p>IoT Expert</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="avatars/kimenyi/jpeg" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>Kimenyi Honore</h4>
                                            <p>ML Expert</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="avatars/my.jpg" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>Munanira Elissa</h4>
                                            <p>Analyst</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>    

                                    
                        

                                    <div class="team-member">
                                        <img src="image/aime.jpeg" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>N.A.Thierry</h4>
                                            <p>System Admin</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="images/team/manage-2.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>G.Nadege</h4>
                                            <p>System Operator</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>

                    
                    </div>
                </div>
            </div>
                
        </div>
    </section>
    <!-- End Team Member Section -->



    </div>
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Contact With Us</h3>
                        <p class="white-text">you can reach to the system admnistration here</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <h4>Contact info</h4>
                        <ul>
                            <li><strong>E-mail :</strong> your-email@mail.com</li>
                            <li><strong>Phone :</strong> +8801-6778776</li>
                            <li><strong>Mobile :</strong> +8801-45565378</li>
                            <li><strong>Web :</strong> yourdomain.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="footer-contact-info">
                        <h4>Working Hours</h4>
                        <ul>
                            <li><strong>Mon-Wed :</strong> 9 am to 5 pm</li>
                            <li><strong>Thurs-Fri :</strong> 12 pm to 10 pm</li>
                            <li><strong>Sat :</strong> 9 am to 3 pm</li>
                            <li><strong>Sunday :</strong> Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright &copy; <a href="">CSE</a> 2023</span>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-social text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-link">
                            <ul class="pull-right">
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>


    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    

    <!-- jQuery Version 2.1.1 -->
    <script src="frontend/js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="frontend/asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="frontend/js/jquery.easing.1.3.js"></script>
    <script src="frontend/js/classie.js"></script>
    <script src="frontend/js/count-to.js"></script>
    <script src="frontend/js/jquery.appear.js"></script>
    <script src="frontend/js/cbpAnimatedHeader.js"></script>
    <script src="frontend/js/owl.carousel.min.js"></script>
	<script src="frontend/js/jquery.fitvids.js"></script>
	<script src="frontend/js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="frontend/js/jqBootstrapValidation.js"></script>
    <script src="frontend/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="frontend/js/script.js"></script>

</body>

</html>
