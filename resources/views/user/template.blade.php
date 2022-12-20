<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gp Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- =======================================================
    * Template Name: Gp - v4.9.1
    * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top " style="background-color:rgb(66, 63, 63)">
      <div class="container d-flex align-items-center justify-content-lg-between" >


        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        @if (Route::has('login'))
                  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                      @auth
                          <x-app-layout>

                          </x-app-layout>
                      @else
                          <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline get-started-btn scrollto" style="margin-left: 250px;">Log in</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline get-started-btn scrollto" style="margin-left: 130px;">Register</a>
                          @endif
                      @endauth
                  </div>
        @endif
        @yield('bouton')

      </div>


    </header><!-- End Header -->


    <main id="main">

      <!-- ======= About Section ======= -->

      <style type="text/css">
        .td1{
          text-align: center;
          font-weight:bold;
          font-size:30px;
        }
        th{
            padding:25px;
            color: black;
            text-align:center;
            font-size:20px;
        }
        table{
            padding-top:0px;
            margin-top:10px;
            align-items: center;
            margin-left: 0px;
        }
        td{
          text-align:center;
        }
        .tye{
            background-color: #ffc451;
        }
        .tye1{
            background-color: rgb(66, 63, 63);
        }

      </style>


    <section style="padding-top: 60px;">
      <div class="container" >
        <div class="row justify-content-center" style="padding: 70px; padding-top:50px">
          <div class="col-xl-6 col-lg-8">
            <h1 style="text-align: center; font-weight:bold; font-size:50px; ">@yield('title')</h1>
          </div>
        </div>
        <div class="row gy-4 ml-5 mr-5  justify-content-center" data-aos="zoom-in" data-aos-delay="250" style="padding: 70px; padding-top:10px; margin-left:110px; padding-right:140px">
          <div class="card"  >
          <div class="card-header" style="color: black;">
             <h4 style="font-weight:bold; ">@yield('headertitle')</h4>
          </div>
          <div class="card-body">
              @yield('body')
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container mt-5">
        <div class="copyright">
          &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
        </div>

      </div>
    </footer><!-- End Footer -->


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

</html>


