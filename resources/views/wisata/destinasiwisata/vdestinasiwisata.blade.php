@extends('template/index')
@section('content')

<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner">

      <div class="carousel" style="background-image: url(/img/tic/banner1.jpg)" alt="mountains">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown"><span>Destinasi Wisata</span></h2>
            <p class="animate__animated animate__fadeInUp">Mari jelajah Kota Bandung bersama kami.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
  
        <div class="section-title">
          <h2></h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
  

<main id="main">

    <!-- ======= Breadcrumbs ======= -->

        <div class="d-flex justify-content-between align-items-center">
          <h2>Destinasi Wisata</h2>
          <ol>
            <li><a href="/blogwisata">Destinasi Wisata</a></li>
            <li>Destinasi Wisata di Kota Bandung</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class=" ">
                  <img src="/img/{{$data['destinasiwisata']->foto_destinasi}}" alt="">
                </div>

              </div>
              
            </div>

            <div class="portfolio-description">
              <h2>{{$data['destinasiwisata']->judul_destinasi}}</h2>
              <p class="contaitner" style="text-align: justify">
                {{$data['destinasiwisata']->detail_destinasi}}
              </p>
            </div>


          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{$data['destinasiwisata']->judul_destinasi}}</h3>
              <ul>
                <li><strong>Kategori</strong>: {{$data['destinasiwisata']->kategori_destinasi}}</li>
                <li><strong>Tempat</strong>: Tempat Wisata</li>
                <li><strong>Website</strong>: <a href="/">www.ticbandung.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Rekomendasi Tempat</h2>
              <p>
                <a href="#souvenir"></a>
              </p>

            {{-- <div class="portfolio-description">
              <h2>{{$destinasi->judul_destinasi}}</h2>
              <p>
                {{$destinasi->highlight_destinasi}}
              </p>
            </div> --}}


          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  @endsection