<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta name="description" content="Name of your web site">
  <meta name="author" content="NusaTheme">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Eray Mutabesha</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/images/favicon.png" type="image/png">
  <!-- /Favicon -->

  <!-- STYLES -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&amp;display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-icons.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/splitting.css">
  <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- /STYLES -->
</head>

<body class="dark">
  <header class="site-header sticky wow fadeInDown">
    <div class="container">
      <div class="site-header-container">
        <!-- Logo -->
        <div class="site-header-logo">
          <a href="/#" class="logo">
            <img src="assets/images/logo.png" alt="Your Logo" width="120" height="34">
            <span class="visually-hidden">Logo</span>
          </a>
        </div>
        <!-- /Logo -->

        <!-- Menu -->
        <div class="mobile-menu d-lg-none">
          <button class="js-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
        <nav class="site-menu text-uppercase">
          <ul>
            <li><a href="/#home" class="one-page-link active">Home</a></li>
            <li><a href="/#service" class="one-page-link">Services</a></li>
            <li><a href="/#about" class="one-page-link">About Me</a></li>
            <li class="has-submenu">
              <a href="#">Blog <i class="fa fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="/bloglist">Blog List</a></li>
                <li><a href="/postblog">Create a Blog</a></li>
              </ul>
            </li>
            <li><a href="/#contact" class="one-page-link">Contact</a></li>
          </ul>
        </nav>
        <!-- /Menu -->

        <!-- Button Hire Me -->
        <div class="d-none d-xl-flex site-menu-right">
          <a href="/#blog" class="btn btn-md one-page-link">
            News<i class="fa fa-chevron-right ms-1 fs-sm"></i>
          </a>
        </div>
        <!-- Button Hire Me -->
      </div>
    </div>

  </header>



  <!-- all website content -->
  {{$slot}}
  <!-- all website content -->



  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <!-- Footer Copyright -->
        <div class="col-lg-5 mb-4 mb-lg-0 text-center text-lg-start">
          <span class="text-gray-2 d-inline-block wow fadeInLeft" data-wow-offset="20">©
            Eray mutabesha 2025 | All Rights
            Reserved</span>
        </div>
        <!-- /Footer Copyright -->

        <!-- Social Media -->
        <div class="col-lg-7">
          <div class="social-media wow fadeInLeft" data-wow-offset="20">
            <a href="https://www.facebook.com/dieumercie.mutabesha?locale=fr_FR">
              <span class="visually-hidden">Facebook</span>
              <i class="bi-facebook"></i>
            </a>
            <a href="https://x.com/ErayMutabesha">
              <span class="visually-hidden">Twitter</span>
              <i class="bi-twitter-x"></i>
            </a>
            <a href="https://www.linkedin.com/in/eray-mutabesha-186240256/">
              <span class="visually-hidden">Linkedin</span>
              <i class="bi-linkedin"></i>
            </a>
            <a href="https://www.instagram.com/its.eray_/">
              <span class="visually-hidden">Instagram</span>
              <i class="bi-instagram"></i>
            </a>
          </div>
        </div>
        <!-- /Social Media -->

      </div>

    </div>
  </footer>
  <!-- /Footer -->

  <!-- Preloader -->
  <div class="preloader">
    <div class="ripple">
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- /Preloader -->

  <!-- CURSOR -->
  <div class="mouse-cursor cursor-outer"></div>
  <div class="mouse-cursor cursor-inner"></div>
  <!-- /CURSOR -->

  <!-- Back to top -->
  <div class="back-to-top-wrapper">
    <a href="#Home" class="back-to-top">
      <span class="visually-hidden">Back to top</span>
      <i class="bi bi-arrow-up-short"></i>
      <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
      </div>
    </a>
  </div>
  <!-- /Back to top -->

  <!-- SCRIPTS -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- /SCRIPTS -->
</body>


</html>