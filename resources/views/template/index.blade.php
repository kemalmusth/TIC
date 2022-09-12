<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tourist Information Center</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/tic/logo.png')}}" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v4.8.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <a class="nav-link scrollto active" href="/">Tourist Information Center Kota Bandung</a>
        <div class="social-links d-none d-md-block">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/tic.bandung/?hl=id" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.tiktok.com/@tic.bandung" class="tiktok"><i class="bi bi-tiktok"></i></a>
          <a href="https://www.youtube.com/channel/UCSf92lAxvuUQlkA1txB7l9g" class="youtube"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </section>
  
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center">
  
        <h1 class="logo me-2"><a href="/" class="logo me-auto"><img src="{{asset('img/tic/logo.png')}}" alt="" class="img-fluid"></a></h1>
        <div class="text me-auto"><a href="/" class="text-dark">Tourist Information Center</a></div>
        <!-- Uncomment below if you prefer to use an image logo -->
  
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="/">Beranda</a></li>
            <li class="dropdown"><a href="#"><span>Wisata</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="/destinasiwisata">Destinasi Wisata </a></li>
                <li><a href="/hotel">Hotel</a></li>
                <li><a href="/blogwisata">Info Wisata</a></li>
              </ul>
  
            </li>
            <li class="dropdown"><a href="#"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="/media">Media Sosial</a></li>
                <li><a href="/berita">Berita</a></li>
                <li><a href="/pengumuman">Pengumuman</a></li>
              </ul>
              
            </li>
            <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="/budaya">Budaya</a></li>
                <li><a href="/kuliner">Kuliner</a></li>
                <li><a href="https://patrakomala.disbudpar.bandung.go.id/en" target="_blank">Ekonomi Kreatif</a></li>
  
              </ul>
  
            </li>
            <li class="dropdown"><a href="#"><span>Layanan Publik</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="/event">Event</a></li>
                <li><a href="https://disbudpar.bandung.go.id/cangkurileung" target="_blank">Lingkung Seni</a></li>
              </ul>
  
            </li>
            <li><a class="getstarted scrollto" href="/login">Masuk</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- end navbar -->
  
      </div>
    </header><!-- End Header -->
  
  {{-- Pemanggilan content --}}

 @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="bg-success pt-10">
    <div class="container">
      <div class="row">
        <div class="col-sm" style="text-align:left;">

          <div class="container">
          <div><strong><span>Tourist Information Center</span></strong></div>
          <div>Jl. Asia Afrika, Balonggede, Regol, Kota Bandung Jawa Barat</div>
          </div>

          <div class="container mt-3">
          <strong><span>Kontak</span></strong>
          <div>+6289656550878</div>
          <div>promosi_disbudpar@bandung.go.id</div>
          </div>

          <div class="container mt-3">
            <div class="card w-10" style="color:black">
              <div class="card-body">
                Jam Pelayanan
                <div>
                  <strong><span>
                    08.00-16.00 WIB
                  </strong>
                  </span>
                </div>
              </div>
            </div>
          </div>

        </div>

        
        <div class="col-sm" style="text-align:left;">
          <div class="container">
            <img src="{{asset('img/tic/bandung.png')}}" width="100"><img src="{{asset('img/tic/bandung1.png')}}" width="150">
          </div>
        </div>

        <div class="col-sm" style="text-align:left;">
          <div><strong><span>Profil</span></strong></div>
          <div><a href="#about" style="color:white">Tentang Kami</a></div>
          <div><a href="#about" style="color:white">Struktur Organisasi</a></div>
          <div><a href="#about" style="color:white">FAQ</a></div>
        </div>

        <div class="col-sm" style="text-align:left;">
        <strong><span>Link Terkait</span></strong>
        <div><a href="https://disbudpar.bandung.go.id/" style="color:white" target="_blank">Dinas Kebudayaan dan Pariwisata Kota Bandung</a></div>
        <div><a href="https://disbudpar.bandung.go.id/cangkurileung" style="color:white" target="_blank"></a>Patrakomala</div>
        <div><a href="#about" style="color:white"></a></div>
        </div>
      </div>
    </div>
    </div>
    <hr>
    <div class="container">
      <a class="nav-link scrollto active" href="/">Copyright &copy 2022 - Tourist Information Center Kota Bandung</a>
    </div>


  </footer>

<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
</body>

</html>