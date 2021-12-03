<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Entreprise Informatique de Devéloppement</title>
  <meta name="author" content="Rodrigue N'doufou">
  <meta name="description" content="informa=tique, informaticiens, infographie, création de site, création de site internet, création d'application
  programmation, programmes, programmé, programmer, logo, affiches publicitaires, creation,">

  <meta name="keywords" content="informatique, informaticiens, infographie, création de site, création de site internet, création d'application
  programmation, programmes, programmé, programmer, logo, affiches publicitaires, creation,">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.6.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ asset('index.html')}}" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="name--structure">e.i.d</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ asset('#hero')}}">accueil</a></li>
          <!--li><a class="nav-link scrollto" href="{{ asset('#about')}}">About</a></li-->
          <!--li><a class="nav-link scrollto" href="{{ asset('#services')}}">nos services</a></li-->
          <li class="dropdown"><a href="#"><span>nos services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ asset('#')}}">CRéATION DE SITES INTERNET</a></li>
              <!--li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li-->
              <li><a href="{{ asset('#')}}">CRéATION D'APPLICATIONS</a></li>
              <li><a href="{{ asset('#')}}">INFOGRAPHIE</a></li>
              <li><a href="{{ asset('#')}}">MONTAGE VIDEOS</a></li>
              <li><a href="{{ asset('#')}}">marketing digital</a></li>
              <li><a href="{{ asset('#')}}">maintenance</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ asset('#portfolio')}}">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="{{ asset('#team')}}">Notre équipe</a></li>
          <li><a href="{{ asset('blog.html')}}">actualités</a></li>
          <!--li class="dropdown"><a href="{{ asset('#')}}"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ asset('#')}}">Drop Down 1</a></li>
              <li class="dropdown"><a href="{{ asset('#')}}"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ asset('#')}}">Deep Drop Down 1</a></li>
                  <li><a href="{{ asset('#')}}">Deep Drop Down 2</a></li>
                  <li><a href="{{ asset('#')}}">Deep Drop Down 3</a></li>
                  <li><a href="{{ asset('#')}}">Deep Drop Down 4</a></li>
                  <li><a href="{{ asset('#')}}">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="{{ asset('#')}}">Drop Down 2</a></li>
              <li><a href="{{ asset('#')}}">Drop Down 3</a></li>
              <li><a href="{{ asset('#')}}">Drop Down 4</a></li>
            </ul>
          </li-->
          <li><a class="nav-link scrollto" href="{{ asset('#contact')}}">Contact</a></li>
          <li><a class="getstarted scrollto" href="{{ asset('#about')}}">Demarrer votre projet</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

  </body>

  </html>
