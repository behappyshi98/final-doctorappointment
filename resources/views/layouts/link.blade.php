<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Doctor appoinment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons-->


  <!-- Google Fonts
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->

  <!-- Vendor CSS Files -->
  <link href="{{ asset('myfile/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('myfile/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('myfile/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('myfile/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('myfile/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('myfile/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('myfile/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('myfile/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('myfile/css/style.css') }}" rel="stylesheet">


</head>

<body>
    @extends('layouts.app')
  <!-- ======= Top Bar =======
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">

      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>-->

 <!-- -->

  <!-- ======= Header ======= -->
 <!--<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>


      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>

            <ul>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header> End Header -->

  @section('content')



@yield('con')






  <footer id="footer">
    <div class="footer-top" style="background-color: #5dc7c2">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Safe Life</h3>
              <p>
                Mavathagama <br>
                Kandy road, Kurunegala<br><br>
                <strong>Phone:</strong> 037 3434765<br>
                <strong>Email:</strong> safe@medicenter.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>



          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Patient Profile Creation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Specialist Recommendations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Real-Time Availability Tracking</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Prescription Management</a></li>

            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>


          </div>

        </div>
      </div>
    </div>


  </footer> <!--End Footer -->
  @endsection

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




  <!-- Vendor JS Files -->
  <script src="myfile/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="myfile/vendor/aos/aos.js"></script>
  <script src="myfile/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="myfile/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="myfile/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="myfile/vendor/php-email-form/validate.js"></script>

  <!--  Main JS File -->
  <script src="myfile/js/main.js"></script>



</body>
</html>
