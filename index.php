<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Woostem | A-grade Stock Control</title>
  <meta content="Woostem An Amazing A-grade Stock Control System" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/woo-icon.ico" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="">Woo Inc</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#features">About</a></li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
          <li><a class="nav-link  scrollto" href="signin.php">Sign in</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 2 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Welcome to <span>Woostem</span></h2>
              <p class="animated fadeInUp">Achieve next-level inventory management with our A-grade control system, expertly designed to be managed by both stockholders and administrators. Our software delivers speedy, secure, and responsive performance, making it an essential tool for any business looking to take control of their inventory with ease.</p>
              <a id="myButton" href="signin.php" class="btn-get-started">
                  Get started now
                      <span class="ripple"></span>
                      <style>
                      #myButton {
                        position: relative;
                        overflow: hidden;
                      }
                      
                      #myButton .ripple {
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        top: 0;
                        left: 0;
                        pointer-events: none;
                        background-image: radial-gradient(circle, rgba(255,255,255,.5) 10%, transparent 10.01%);
                        background-repeat: no-repeat;
                        background-position: 50%;
                        transform: scale(10, 10);
                        opacity: 0;
                        transition: transform .5s, opacity 1s;
                      }
                      
                      #myButton:active .ripple {
                        transform: scale(0, 0);
                        opacity: 0.5;
                        transition: 0s;
                      }
                      
                      button.arrow-right:hover em {
                        animation: arrow-right 0.5s ease-in-out 1 forwards;
                      }
                      
                      @keyframes arrow-right {
                        0% {
                          transform: translateX(0);
                        }
                        50% {
                          transform: translateX(5px);
                        }
                        100% {
                          transform: translateX(3px);
                        }
                      }
                    </style>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="features" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Woostem offers everything you need.</h3>
          <p> This stock control and management system is remarkable, offering a range of features including invoice generation, streamlined usability, and effortless order and product management. Additionally, the system provides advanced report management capabilities, allowing for user-specific report views.</p>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="features" class="testimonials section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>About</h2>
          <h3>What They <span>Are Saying</span> About Us</h3>
          <p>“I've been using the system management software for my business for the past few months and I'm incredibly impressed with its capabilities. It's so easy to add, update, view, and delete products and brands, and the ability to order them directly through the system is a game changer. Plus, the fact that it's open-source and can be managed by stockholders and owners is a huge advantage. Overall, I highly recommend this software to any business looking for an efficient and effective way to manage their system information.”</p>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#features">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#our-services">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#tos">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#policy">Privacy policy</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#order-management">Order management</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#product-management">Product management</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#invoice-generation">Invoice generation</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#easy-to-use">Lightweight control system</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#report-management">Report management</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                  5407 Biashara Street, Nairobi, Kenya <br><br>
                  <strong>Phone:</strong> +254 438 400 3313<br>
                  <strong>Email:</strong> info@woostem.com<br>
                </p>

              </div>

              <div class="col-lg-3 col-md-6 footer-info">
                <h3>About Woostem</h3>
                <p>Woostem is a responsive database system created by DevL67. The control system is an open-source software, and can be managed by stockholders and owners with provision.</p>
                <div class="social-links mt-3">
                    <a href="https://x.com/" class="twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor" class="x-twitter" viewBox="0 0 512 512">
                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                        </svg>
                    </a>
                    <a href="https://facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://skype.com/" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="https://wa.me/254738400313" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Woostem</span></strong> 2022-<?php echo date('Y') ?>. All Rights Reserved
      </div>
      <div class="credits">
        Developed by <a href="mailto:devlewis67@gmail.com">DevL67</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
