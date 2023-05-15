{{-- 
@extends('layouts.app')
@section('main')

<section class="content">
<div class="container">
<div class="services__title__wrap">
<div class="row align-items-center justify-content-between">
<div class="col-xl-5 col-lg-6 col-md-8">
<div class="section__title">
<span class="sub-title">02 - my Services</span>
<h2 class="title">Creates amazing digital experiences</h2>
</div>
</div>
<div class="col-xl-5 col-lg-6 col-md-4">
<div class="services__arrow"></div>
</div>
</div>
</div>
<div class="row gx-0 services__active">
<div class="col-xl-3">
<div class="services__item">
<div class="services__thumb">
<a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img01.jpg') }}" alt=""></a>
</div>
<div class="services__content">
<div class="services__icon">
<img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon01.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon01.png') }}" alt="">
</div>
<h3 class="title"><a href="services-details.html">Business Strategy</a></h3>
<p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
<ul class="services__list">
<li>Research & Data</li>
<li>Branding & Positioning</li>
<li>Business Consulting</li>
<li>Go To Market</li>
</ul>
<a href="services-details.html" class="btn border-btn">Read more</a>
</div>
</div>
</div>
<div class="col-xl-3">
<div class="services__item">
<div class="services__thumb">
<a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img02.jpg') }}" alt=""></a>
</div>
<div class="services__content">
<div class="services__icon">
<img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon02.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon02.png') }}" alt="">
</div>
<h3 class="title"><a href="services-details.html">Brand Strategy</a></h3>
<p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
<ul class="services__list">
<li>User Research & Testing</li>
<li>UX Design</li>
<li>Visual Design</li>
<li>Information Architecture</li>
</ul>
<a href="services-details.html" class="btn border-btn">Read more</a>
</div>
</div>
</div>
<div class="col-xl-3">
<div class="services__item">
<div class="services__thumb">
<a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img03.jpg') }}" alt=""></a>
</div>
<div class="services__content">
<div class="services__icon">
<img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon03.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon03.png') }}" alt="">
</div>
<h3 class="title"><a href="services-details.html">Product Design</a></h3>
<p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
<ul class="services__list">
<li>User Research & Testing</li>
<li>UX Design</li>
<li>Visual Design</li>
<li>Information Architecture</li>
</ul>
<a href="services-details.html" class="btn border-btn">Read more</a>
</div>
</div>
</div>
<div class="col-xl-3">
<div class="services__item">
<div class="services__thumb">
<a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img04.jpg') }}" alt=""></a>
</div>
<div class="services__content">
<div class="services__icon">
<img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon04.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon04.png') }}" alt="">
</div>
<h3 class="title"><a href="services-details.html">Visual Design</a></h3>
<p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
<ul class="services__list">
<li>User Research & Testing</li>
<li>UX Design</li>
<li>Visual Design</li>
<li>Information Architecture</li>
</ul>
<a href="services-details.html" class="btn border-btn">Read more</a>
</div>
</div>
</div>
<div class="col-xl-3">
<div class="services__item">
<div class="services__thumb">
<a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img03.jpg') }}" alt=""></a>
</div>
<div class="services__content">
<div class="services__icon">
<img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon02.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon02.png') }}" alt="">
</div>
<h3 class="title"><a href="services-details.html">Web Development</a></h3>
<p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
<ul class="services__list">
<li>User Research & Testing</li>
<li>UX Design</li>
<li>Visual Design</li>
<li>Information Architecture</li>
</ul>
<a href="services-details.html" class="btn border-btn">Read more</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- services-area-end -->
<!-- work-process-area -->
<section class="work__process">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-6 col-lg-8">
<div class="section__title text-center">
<span class="sub-title">03 - Working Process</span>
<h2 class="title">A clear product design process is the basis of success</h2>
</div>
</div>
</div>
<div class="row work__process__wrap">
<div class="col">
<div class="work__process__item">
<span class="work__process_step">Step - 01</span>
<div class="work__process__icon">
<img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon01.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon01.png') }}" alt="">
</div>
<div class="work__process__content">
<h4 class="title">Discover</h4>
<p>Initial ideas or inspiration & Establishment of user needs.</p>
</div>
</div>
</div>
<div class="col">
<div class="work__process__item">
<span class="work__process_step">Step - 02</span>
<div class="work__process__icon">
<img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon02.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon02.png') }}" alt="">
</div>
<div class="work__process__content">
<h4 class="title">Define</h4>
<p>Interpretation & Alignment of findings to project objectives.</p>
</div>
</div>
</div>
<div class="col">
<div class="work__process__item">
<span class="work__process_step">Step - 03</span>
<div class="work__process__icon">
<img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon03.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon03.png') }}" alt="">
</div>
<div class="work__process__content">
<h4 class="title">Develop</h4>
<p>Design-Led concept and Proposals hearted & assessed</p>
</div>
</div>
</div>
<div class="col">
<div class="work__process__item">
<span class="work__process_step">Step - 04</span>
<div class="work__process__icon">
<img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon04.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon04.png') }}" alt="">
</div>
<div class="work__process__content">
<h4 class="title">Deliver</h4>
<p>Process outcomes finalised & Implemented</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- work-process-area-end -->
<!-- portfolio-area -->
@include('layouts.app')
<!-- portfolio-area-end -->
<!-- partner-area -->
<section class="partner">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<ul class="partner__logo__wrap">
<li>
<img class="light" src="{{ asset('frontend/assets/img/icons/partner_light01.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/partner_01.png') }}" alt="">
</li>
<li>
<img class="light" src="{{ asset('frontend/assets/img/icons/partner_light02.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/partner_02.png') }}" alt="">
</li>
<li>
<img class="light" src="{{ asset('frontend/assets/img/icons/partner_light03.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/partner_03.png') }}" alt="">
</li>
<li>
<img class="light" src="{{ asset('frontend/assets/img/icons/partner_light04.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/partner_04.png') }}" alt="">
</li>
<li>
<img class="light" src="{{ asset('frontend/assets/img/icons/partner_light05.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/partner_05.png') }}" alt="">
</li>
<li>
<img class="light" src="{{ asset('frontend/assets/img/icons/partner_light06.png') }}" alt="">
<img class="dark" src="{{ asset('frontend/assets/img/icons/partner_06.png') }}" alt="">
</li>
</ul>
</div>
<div class="col-lg-6">
<div class="partner__content">
<div class="section__title">
<span class="sub-title">05 - partners</span>
<h2 class="title">I proud to have collaborated with some awesome companies</h2>
</div>
<p>I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own.</p>
<a href="contact.html" class="btn">Start a conversation</a>
</div>
</div>
</div>
</div>
</section>
<!-- partner-area-end -->
<!-- testimonial-area -->
<section class="testimonial">
<div class="container">
<div class="row align-items-center justify-content-between">
<div class="col-lg-6 order-0 order-lg-2">
<ul class="testimonial__avatar__img">
<li><img src="{{ asset('frontend/assets/img/images/testi_img01.png') }}" alt=""></li>
<li><img src="{{ asset('frontend/assets/img/images/testi_img02.png') }}" alt=""></li>
<li><img src="{{ asset('frontend/assets/img/images/testi_img03.png') }}" alt=""></li>
<li><img src="{{ asset('frontend/assets/img/images/testi_img04.png') }}" alt=""></li>
<li><img src="{{ asset('frontend/assets/img/images/testi_img05.png') }}" alt=""></li>
<li><img src="{{ asset('frontend/assets/img/images/testi_img06.png') }}" alt=""></li>
<li><img src="{{ asset('frontend/assets/img/images/testi_img07.png') }}" alt=""></li>
</ul>
</div>
<div class="col-xl-5 col-lg-6">
<div class="testimonial__wrap">
<div class="section__title">
<span class="sub-title">06 - Client Feedback</span>
<h2 class="title">Happy clients feedback</h2>
</div>
<div class="testimonial__active">
<div class="testimonial__item">
<div class="testimonial__icon">
<i class="fas fa-quote-left"></i>
</div>
<div class="testimonial__content">
<p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
<div class="testimonial__avatar">
<span>Rasalina De Wiliamson</span>
</div>
</div>
</div>
<div class="testimonial__item">
<div class="testimonial__icon">
<i class="fas fa-quote-left"></i>
</div>
<div class="testimonial__content">
<p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
<div class="testimonial__avatar">
<span>Rasalina De Wiliamson</span>
</div>
</div>
</div>
</div>
<div class="testimonial__arrow"></div>
</div>
</div>
</div>
</div>
</section>
<!-- testimonial-area-end -->
<!-- blog-area -->
@include('layouts.app')
<!-- blog-area-end -->
<!-- contact-area -->
<section class="homeContact">
<div class="container">
<div class="homeContact__wrap">
<div class="row">
<div class="col-lg-6">
<div class="section__title">
<span class="sub-title">07 - Say hello</span>
<h2 class="title">Any questions? Feel free <br> to contact</h2>
</div>
<div class="homeContact__content">
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
<h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
</div>
</div>
<div class="col-lg-6">
<div class="homeContact__form">
<form action="#">
<input type="text" placeholder="Enter name*">
<input type="email" placeholder="Enter mail*">
<input type="number" placeholder="Enter number*">
<textarea name="message" placeholder="Enter Massage*"></textarea>
<button type="submit">Send Message</button>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- contact-area-end -->
@endsection --}}
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EWS Muvumba </title>

    <!-- Bootstrap Core CSS -->
    <link href="frontend/asset/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link href="frontend/css/font-awesome.min.css" rel="stylesheet">
    
    
    <!-- Animate CSS -->
    <link href="frontend/css/animate.css" rel="stylesheet" >
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="frontend/css/owl.carousel.css" >
    <link rel="stylesheet" href="frontend/css/owl.theme.css" >
    <link rel="stylesheet" href="frontend/css/owl.transitions.css" >

    <!-- Custom CSS -->
    <link href="frontend/css/style.css" rel="stylesheet">
    <link href="frontend/css/responsive.css" rel="stylesheet">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="frontend/css/color/green.css">
    
    
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="frontend/css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="frontend/css/color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="frontend/css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="frontend/css/color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="frontend/css/color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="frontend/css/color/light-green.css" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
    <!-- Modernizer js -->
    <script src="frontend/js/modernizr.custom.js"></script>

    
  

</head>

<body class="index">
    
    
  
       
<!-- Styleswitcher End
================================================== -->

    <!-- Navigation -->
    <section  class="portfolio-section-1">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header ">
               
                <img src="/image/icon.jpg" alt="EWSLogo"  alt="User Avatar" class="img-size-50 img-circle mr-3 navbar-brand page-scroll">
                <a class="navbar-brand page-scroll" href="">EWS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li>
                        <a class="page-scroll" href="#portfolio">home</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#about-us">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#service">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#pricing">Pricing</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#latest-news">Latest News</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#testimonial">Testimonials</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#partner">Partner</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                    @guest
                    @if (Route::has('login'))
                       
                            <a class="page-scroll" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    <li>
                    @if (Route::has('register'))
                       
                            <a class="page-scroll" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @endguest
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>
    
   
   <section id="portfolio" class="portfolio-section-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>EWS Muvumba</h3>
                    <p>Welcome to Early warning system Muvumba website</p>
                </div>    
                <div class="container">
                    <div class="row">
                        @foreach($station as $st)
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="feature">
                                <img src="image/photo 1.jpg" alt="station Image" class="img-responsive" />                                <div class="feature-content">
                                    <h4>{{$st->name}}</h4>
                                    <p>{{$st->details}}</p>
                              
                            </div>
                        </div><!-- /.col-md-3 -->
                        </div>
                    @endforeach
                </div><!-- /.row -->            
                
            </div>                    
            </div>
        </div>
       
    </div>
</section>
   <section>

     

    <!-- Start About Us Section 2 -->
    <div class="about-us-section-2">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6">
                    <div class="skill-shortcode">
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Web Design</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="60">
                                    <span class="progress-bar-span" >60%</span>
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>HTML & CSS</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="95">
                                    <span class="progress-bar-span" >95%</span>
                                    <span class="sr-only">95% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Wordpress</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="80">
                                    <span class="progress-bar-span" >80%</span>
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Joomla</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="100">
                                    <span class="progress-bar-span" >100%</span>
                                    <span class="sr-only">100% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Extension</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="70">
                                    <span class="progress-bar-span" >70%</span>
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>  
                        </div>
                                                            
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div id="carousel-example-generic" class="carousel slide about-slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/about-01.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/about-02.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/about-03.jpg" alt="">
                            </div>
    
                        </div>
  
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Start About Us Section 2 -->


    


    <!-- Start Feature Section -->
        <section id="service" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Our Services</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
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
                                    <h4 class="media-heading">Web Design</h4>
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
                                    <h4 class="media-heading">HTML5 & CSS3</h4>
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
                                    <h4 class="media-heading">Wordpress Theme</h4>
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
                                    <h4 class="media-heading">Wordpress Plugin</h4>
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
                                    <h4 class="media-heading">Joomla Template</h4>
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
                                <div class="media-body">
                                    <h4 class="media-heading">Joomla Extension</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    
                </div><!-- /.row -->
            
            </div><!-- /.container -->
        </section>
        <!-- End Feature Section -->
    
    
    
    <!-- Start Fun Facts Section -->
    <section class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-cloud-upload"></i>
                        <div class="timer" id="item1" data-to="991" data-speed="5000"></div>
                        <h5>Files uploaded</h5>                               
                      </div>
                    </div>  
                    <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-check"></i>
                        <div class="timer" id="item2" data-to="7394" data-speed="5000"></div>
                        <h5>Projects completed</h5>                               
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-code"></i>
                        <div class="timer" id="item3" data-to="18745" data-speed="5000"></div>
                        <h5>Lines of code written</h5>                               
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-male"></i>
                        <div class="timer" id="item4" data-to="8423" data-speed="5000"></div>
                        <h5>Happy clients</h5>                               
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
                                        <img src="images/team/manage-1.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
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
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
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
                                        <img src="images/team/manage-3.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
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
                                        <img src="images/team/manage-4.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
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
                                        <img src="images/team/manage-1.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
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
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
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



    <!-- Start Pricing Table Section -->
    <div id="pricing" class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Our Pricing Plan</h3>
                            <p class="white-text">Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                </div>
            </div>
                    
            <div class="row">
                        
                <div class="pricing">
                        
                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
								    <h3>Free</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="price-value">$49<span>.00</span></div>
                                    <div class="interval">per month</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>40 GB Storage</li>
                                        <li>40GB Transfer</li>
                                        <li>10 Domains</li>
                                        <li>20 Projects</li>
                                        <li>Free installation</li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
								    <h3>Standard</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="price-value">$49<span>.00</span></div>
                                    <div class="interval">per month</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>40 GB Storage</li>
                                        <li>40GB Transfer</li>
                                        <li>10 Domains</li>
                                        <li>20 Projects</li>
                                        <li>Free installation</li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
								    <h3>Premium</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="price-value">$49<span>.00</span></div>
                                    <div class="interval">per month</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>40 GB Storage</li>
                                        <li>40GB Transfer</li>
                                        <li>10 Domains</li>
                                        <li>20 Projects</li>
                                        <li>Free installation</li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
								    <h3>Professional</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="price-value">$49<span>.00</span></div>
                                    <div class="interval">per month</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>40 GB Storage</li>
                                        <li>40GB Transfer</li>
                                        <li>10 Domains</li>
                                        <li>20 Projects</li>
                                        <li>Free installation</li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
								    <h3>Premium</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="price-value">$49<span>.00</span></div>
                                    <div class="interval">per month</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>40 GB Storage</li>
                                        <li>40GB Transfer</li>
                                        <li>10 Domains</li>
                                        <li>20 Projects</li>
                                        <li>Free installation</li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
								    <h3>Professional</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="price-value">$49<span>.00</span></div>
                                    <div class="interval">per month</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>40 GB Storage</li>
                                        <li>40GB Transfer</li>
                                        <li>10 Domains</li>
                                        <li>20 Projects</li>
                                        <li>Free installation</li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
						
						
            </div>
        </div>
    </div>
    <!-- End Pricing Table Section -->
    
    
    
    <!-- Start Latest News Section -->
    <section id="latest-news" class="latest-news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Latest News</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest-news">
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-01.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>31</strong> <br>Dec , 2014</span>
                                
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-02.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>17</strong> <br>Feb , 2014</span>
                                
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-03.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2014</span>
                                
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-01.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2014</span>
                                
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-02.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2014</span>
                                
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-03.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2014</span>
                                
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->



    
    
    
    <!-- Start Testimonial Section -->
    <div id="testimonial" class="testimonial-section">
        <div class="container">
            <!-- Start Testimonials Carousel -->
            <div id="testimonial-carousel" class="testimonials-carousel">
                <!-- Testimonial 1 -->
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="images/testimonial/face_1.png" alt="" >
                        <div class="testimonial-author">
                            <div class="author">John Doe</div>
                            <div class="designation">Organization Founder</div>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<br> laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="images/testimonial/face_2.png" alt="" >
                        <div class="testimonial-author">
                            <div class="author">Jane Doe</div>
                            <div class="designation">Lead Developer</div>
                        </div>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia<br> consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="images/testimonial/face_3.png" alt="" >
                        <div class="testimonial-author">
                            <div class="author">John Doe</div>
                            <div class="designation">Honorable Customer</div>
                        </div>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit<br> anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- End Testimonials Carousel -->
        </div>
    </div>
    <!-- End Testimonial Section -->
    
    

    <!-- Clients Aside -->
  
    
    
    <div>
    d
    </div>
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Contact With Us</h3>
                        <p class="white-text">Duis aute irure dolor in reprehenderit in voluptate</p>
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
                        <span class="copyright">Copyright &copy; <a href="/http://guardiantheme.com">GuardinTheme</a> 2015</span>
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
