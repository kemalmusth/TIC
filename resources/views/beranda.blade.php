@extends('template/index')
@section('content')

 <!-- ======= Hero Section ======= -->
 <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(img/tic/banner1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to</h2>
              <h2 class="animate__animated animate__fadeInDown"><span>Tourist Information Center</span></h2>
              <p class="animate__animated animate__fadeInUp">Let's explore Bandung with us.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(img/tic/banner2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di</h2>
              <h2 class="animate__animated animate__fadeInDown"><span>Tourist Information Center</span></h2>
              <p class="animate__animated animate__fadeInUp">Mari jelajah Bandung bersama kami.</p>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(img/tic/banner3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Wilujeng Sumping di</h2>
              <h2 class="animate__animated animate__fadeInDown"><span>Tourist Information Center</span></h2>
              <p class="animate__animated animate__fadeInUp">Hayu jelajah Bandung sareng kami.</p>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
              <h4 class="title"><a href="/destinasiwisata">Destinasi Wisata</a></h4>
              <p class="description">Apapun tujuanmu datang ke Kota Bandung, jangan lewatkan berkunjung ke destinasi-destinasi yang TIC rekomendasikan ini!</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-fill"></i></div>
              <h4 class="title"><a href="/blogwisata">Info Wisata</a></h4>
              <p class="description">Buat yang suka jalan-jalan berwisata, ada info penting! Ternyata setiap wisata yang ada di Kota Bandung ada kategorinya, lho. Apa saja?</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="/event">Event</a></h4>
              <p class="description" style="">Dalam setahun ke depan, Kota Bandung telah menyiapkan event-event besar yang sayang kalau dilewatkan. Ada event seru apa saja? TIC kasih bocoran update-nya!</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container text-center">

        <div class="section-title">
          <h2>About Us</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="/img/tic/about_us2.jpeg" class="img-fluid" width="350">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content ms-5">
            <h3>Tourist Information Center</h3>
            <p class="text-justify" style="text-align: justify">
              Senang sekali kami sebagai TIC dapat selalu menemani Wargi dalam menyajikan info tentang pariwisata di Kota Bandung. Tapi.. Yakin sudah bener-bener kenal dengan TIC? Yuk, kenalan lagi</p>
              <p class="text-justify" style="text-align: justify">Tourist Information Center (TIC) merupakan salah satu sarana promosi wisata yang dimiliki oleh Dinas Kebudayaan dan Pariwisata Kota Bandung. Petugas yang ada Tourist Information Center (TIC) akan memberikan pelayanan kepada wisatawan yang berkunjung dengan menyampaikan beragam informasi daya tarik wisata yang ada di Kota Bandung dan sekitarnya. Wisatawan atau pengunjung yang membutuhkan informasi mengenai update wisata terkini di Kota Bandung bisa langsung datang dan berkunjung di Tourist Information Center (TIC) Kota Bandung di Jalan Asia Afrika tepatnya bersebelahan dengan Masjid Agung Bandung.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2></h2>
          <p></p>
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="/img/tic/windo2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/tic/disbudpar.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/tic/disbudpar1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/tic/patrakomala.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/tic/haribandung.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/tic/humas.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/tic/bandung.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/tic/bandung1.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Info Wisata Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">
      
          <div class="section-title">
            <h2>Video TIC Bandung</h2>
            <p>TIC selalu menyajikan video-video keren buat Wargi semua yang penasaran dengan apa yang ada di Kota Bandung. Simak semuanya, di sini!</p>
          </div>
      
          <div class="tagembed-container" style="width:100%;height:100%;overflow: "><div class="tagembed-socialwall" data-wall-id="62280" view-url="https://widget.tagembed.com/62280?view">  </div> 
          <script src="//widget.tagembed.com/embed.min.js" type="text/javascript"></script></div>
           
        </div>
      </section><!-- End Info Wisata Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Tourist Information Center</h3>
            <p>Mari jelajah kota Bandung bersama kami.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Read More</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Maps Section ======= -->
    <div class="peta-responsive">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8075979181554!2d107.6313561504279!3d-6.913593594980059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7938549e73f%3A0x71976866ae8eb5ff!2sDinas%20Kebudayaan%20dan%20Pariwisata%20Kota%20Bandung!5e0!3m2!1sid!2sid!4v1662495260183!5m2!1sid!2sid" width="1400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- End Maps Section -->

    <!-- ======= Medsos Section ======= -->
    <div class="container mb-5">
    <div
  loading="lazy"
  data-mc-src="68518656-6275-40bf-9d79-f7f97459c655#instagram"></div>
        
    <script 
    src="https://cdn2.woxo.tech/a.js#62e9462b45f9c70b6a204054" 
    async data-usrc>
    </script>

  </div>

<!-- End Medsos Section -->

@endsection