<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@lang('public.title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/font/assets/img/favicon.png" rel="icon">
  <link href="/font/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/font/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/font/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/font/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/font/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/font/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/font/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/font/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/font/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  <link href="font/assets/css/style.css" rel="stylesheet">
  <style>
    .updates-item {
      margin-bottom: 20px;
    }

    .portfolio-img {
      height: 250px; /
      overflow: hidden; 
    }

    .equal-img {
      width: 100%; 
      height: 100%; 
      object-fit: cover; 
    }

    .portfolio-info {
      text-align: center; 
      padding: 10px;
    }

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
      <a href="" class="brand-link">
        <img src="/image/icon.jpg" alt="EWSLogo"  class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-family: 'Aclonica'; color:#9cff69">@lang('public.title')</span>
      </a>
        
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">@lang('public.home')</a></li>
          <li><a class="nav-link scrollto" href="#about">@lang('public.about')</a></li>
          <li><a class="nav-link scrollto" href="#services">@lang('public.service')</a></li>
          <li><a class="nav-link scrollto " href="#updates">@lang('public.update')</a></li>
          <li><a class="nav-link scrollto" href="#team">@lang('public.team')</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">@lang('public.contact')</a></li>
          <li><a class="nav-link scrollto" href="{{'login'}}">@lang('public.login')</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"> @lang('public.title') - <span>@lang('public.hello1')</span></h2>
          <p class="animate__animated fanimate__adeInUp">@lang('public.hello_paragraph1')</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">@lang('public.title') - <span>@lang('public.hello2')</span></h2>
          <p class="animate__animated animate__fadeInUp">@lang('public.hello_paragraph2')</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">@lang('public.title') - <span>@lang('public.hello3')<span></h2>
          <p class="animate__animated animate__fadeInUp">@lang('public.hello_paragraph3')</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">@lang('public.read_more')</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p class="text-center">@lang('public.who')</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
             @lang('public.whop')
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> @lang('public.real_time')</li>
              <li><i class="ri-check-double-line"></i> @lang('public.info2')</li>
              <li><i class="ri-check-double-line"></i> @lang('public.info3')</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>@lang('public.info4')
            </p>
            <a href="#" class="btn-learn-more">@lang('public.read_more')</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>@lang('public.service')</h2>
          <p class="text-center">@lang('public.info5')</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">@lang('public.service1')</a></h4>
              <p class="description">@lang('public.serviceP1')</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">@lang('public.service2')</a></h4>
              <p class="description">@lang('public.serviceP2')</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">@lang('public.service3')</a></h4>
              <p class="description">@lang('public.serviceP3')</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">@lang('public.service4')</a></h4>
              <p class="description">@lang('public.serviceP4')</p>
            </div>
          </div>

          
          

      </div>
    </section><!-- End Services Section -->

    
    <section id="updates" class="updates">
      <div class="container">
    
        <div class="section-title" data-aos="zoom-out">
          <h2>@lang('public.update')</h2>
          <p class="text-center">@lang('public.activities')</p>
        </div>
    
        <div class="row updates-container" data-aos="fade-up">
    
          <div class="col-lg-4 col-md-6 updates-item filter-app">
            <div class="portfolio-img">
              <img src="font/assets/img/portfolio/bridge.jpg" class="img-fluid equal-img" alt="">
            </div>
            <div class="portfolio-info">
              <h4>@lang('public.activity1')</h4>
              <p id="site-visit-paragraph" style="display: none;">@lang('public.site_visit_paragraph')</p>
              <a href="javascript:void(0)" class="toggle-paragraph" title="Show Paragraph">
                <i class="bx bx-plus">@lang('public.read_more')<</i> 
              </a>
              <a href="font/assets/img/portfolio/bridge.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1">
                <i class="bx bx-plus"></i></a>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img">
              <img src="font/assets/img/portfolio/portifolio-2.png" class="img-fluid equal-img" alt="">
            </div>
            <div class="portfolio-info">
              <h4>@Lang('public.activity2')</h4>
              <p id="data-collection-paragraph" style="display: none;">@lang('public.model_paragraph')</p>
              <a href="javascript:void(0)" class="toggle-paragraph" title="Show Paragraph">
                <i class="bx bx-plus">@lang('public.read_more')<</i>
              </a>
              <a href="font/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3">
                <i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details">
                <i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img">
              <img src="font/assets/img/portfolio/prototype2.png" class="img-fluid equal-img" alt="">
            </div>
            <div class="portfolio-info">
              <h4>@lang('public.activity3')</h4>
              <p id="prototype-paragraph" style="display: none;">@lang('public.prototype_paragraph')</p>
              <a href="javascript:void(0)" class="toggle-paragraph" title="Show Paragraph">
                <i class="bx bx-plus">@lang('public.read_more')<</i>
              </a>
              <a href="font/assets/img/portfolio/prototype.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2">
                <i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details">
                <i class="bx bx-link"></i></a>
            </div>
          </div>
    
        </div>
      </div>
    </section><!-- End Updates Section -->
    

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
    <div class="container">
    <div class="section-title" data-aos="zoom-out">
      <h2>@lang('public.team')<</h2>
      <p class="text-center">@lang('public.project_team')</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up">
          <div class="member-img">
            <img src="avatars\martin.png" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Dr.Martin KURADUSENGE</h4>
            <span>Project Manager </span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="avatars\zubeda.png" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Dr. Zubeda M</h4>
            <span>Team member</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="avatars\eric.png" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Dr.Eric HITIMANA</h4>
            <span>Team member</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="avatars\omar.png" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Omar J SINAYOBYE</h4>
            <span>Software Engineer</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="avatars\nadege.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Flourence M</h4>
            <span>Team member</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="avatars\nadege.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Nadege GAJU</h4>
            <span>Developer</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="avatars\aime_thierry.png" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Aime Thierry NIZEYIMANA</h4>
            <span>Developer</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="avatars\nadege.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/aime_wyatt?igsh=am8zOThla255dmxz"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/nizeyimana-aime-thierry-6a321a245/"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Nadege Gaju</h4>
            <span>Software Engineer</span>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p class="text-center">Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Kigali, Nyarugenge, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>ews@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+250788615892</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Muvumba EWS</h3>
      <p>Our early warnings give communities precious time to prepare.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>@lang('public.title')</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="">@lang('public.team_name')</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="font/assets/vendor/aos/aos.js"></script>
  <script src="font/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="font/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="font/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="font/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="font/assets/vendor/php-email-form/validate.js"></script>

  <!--  Main JS File -->
  <script src="font/assets/js/main.js"></script>
  <script>
    
    document.querySelectorAll('.toggle-paragraph').forEach(function(toggle) {
      toggle.addEventListener('click', function() {
        var paragraph = this.previousElementSibling; 
        var icon = this.querySelector('i');
        
        
        if (paragraph.style.display === 'none' || paragraph.style.display === '') {
          paragraph.style.display = 'block'; 
          icon.classList.remove('bx-plus');  
          icon.classList.add('bx-minus');
          this.title = "Hide Paragraph";
          icon.textContent = " Hide"; 
        } else {
          paragraph.style.display = 'none'; 
          icon.classList.remove('bx-minus'); 
          icon.classList.add('bx-plus');
          this.title = "Show Paragraph";
          icon.textContent = " Read More"; 
        }
      });
    });
  </script>
  
  
</body>

</html>