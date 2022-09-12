@extends('template/index')
@section('content')

<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner">

      <div class="carousel" style="background-image: url(/img/tic/banner1.jpg)" alt="mountains">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown"><span>Info Wisata</span></h2>
            <p class="animate__animated animate__fadeInUp">Mari jelajah Kota Bandung bersama kami.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ======= Blog Section ======= -->

<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title">
      <h2></h2>
      <p></p>
    </div>




    <!-- ======= Blog Section ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

      <main id="main">

        <!-- ======= Breadcrumbs ======= -->
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Info Wisata</h2>
              <ol>
                <li><a href="/blogwisata">Info Wisata</a></li>
                <li>Info Wisata di Kota Bandung</li>
              </ol>
            </div>

</section>
    <div class="row">

      @foreach ($data['blogwisata'] as $blog)

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="/img/{{$blog->foto_blog}}" alt="">
          <h4>{{$blog->judul_blog}}</h4>
          <span>{{$blog->kategori_blog}}</span>
          <p>
            {{$blog->detail_blog}}
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <a href="/blogwisata/{{$blog->id}}/vblog" class="btn btn-success">Lihat</a>
          </div>
        </div>
      </div>

      @endforeach

  </div>
</section>

</main>

@endsection
