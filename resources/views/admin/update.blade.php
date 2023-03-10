<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

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
      <a href="{{ url('adminHome') }}" class="get-started-btn scrollto" style="margin-right: 270px">Get Started</a>
    </div>


  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->



    <section style="padding-top: 70px;">
        <div class="container">
          <div class="row" style="padding: 70px; padding-top:60px">
            <div class="col">
              <h1 style="text-align:center; font-weight:bold; font-size:50px">Modifier une demande </h1>
            </div>
          </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header" style="color: black;">
                            Modification du statut
                        </div>
                        <div class="card-body">
                            @if(Session::get('message-sent'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('message-sent') }}
                                </div>
                            @endif
                            <form action="{{ url('modifier', $data->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group" style="padding: 10px;">
                                  <label for="email">Email</label>
                                  <input name="email" class="form-control" cols="30" rows="10" />
                                </div>
                                <div class="form-group" style="padding: 10px;">
                                  <select class="form-select" aria-label="Default select example" name="status">
                                    <option selected>Choisissez</option>
                                    <option value="En cours de traitement">En cours de traitement</option>
                                    <option value="Rejet??e" onclick="addfield()">Rejet??e</option>
                                    <option value="Trait??e">Trait??e</option>
                                  </select>
                                </div>
                                <div  style="padding: 15px;">
                                  <div class="row">
                                    <div class="col">
                                      <button type="submit" class="btn btn-primary" style="color:black; margin-left:220px; width:150px">Envoyer</button>
                                    </div>
                                    <div class="col">
                                      <a class=" btn btn-success" href="{{ url('details') }}" style="width: 150px; margin-left:400">D??tails</a>
                                    </div>
                                  </div>

                                </div>

                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



  </main><!-- End #main -->

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


  <script type="text/javascript">

      function addfield(){
        document.getElementById('cible').innerHTML = '<input type="text"/>';
      }

  </script>
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
