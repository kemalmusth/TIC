@extends('template/index')
@section('content')
    
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner">

      <div class="carousel" style="background-image: url(/img/tic/banner1.jpg)" alt="mountains">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown"><span>Souvenir</span></h2>
            <p class="animate__animated animate__fadeInUp">Mari jelajah Kota Bandung bersama kami.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>{{($data['judul'])}}</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
            
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        @foreach ($data['souvenir'] as $souvenir)

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="/img/{{$souvenir->foto_barang}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4> {{$souvenir->nama_barang}} </h4>

              <div class="portfolio-links">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$souvenir->id}}">
  Lihat Produk
</button>
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal-{{$souvenir->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> {{$souvenir->nama_barang}} </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="/img/{{$souvenir->foto_barang}}" class="img-fluid" alt="">
        <figure>
          <blockquote class="blockquote">
            <p>{{$souvenir->detail_barang}}</p>
          </blockquote>
          <figcaption class="blockquote-footer">
            harga : <cite title="Source Title">Rp. {{number_format($souvenir->harga_barang)}} </cite>
          </figcaption>
        </figure>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <a href="http://wa.me/+6285900075056" target="_blank" class="btn btn-success">Beli</a>
      </div>
    </div>
  </div>
</div>
@endforeach


      </div>

    </div>
  </section><!-- End Portfolio Section -->

  @endsection