@extends('template/index')
@section('content')

<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner">

      <div class="carousel" style="background-image: url(/img/tic/banner1.jpg)" alt="mountains">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown"><span>Berita Kota Bandung</span></h2>
            <p class="animate__animated animate__fadeInUp">Mari jelajah Kota Bandung bersama kami.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ======= Berita Section ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

      <div class="section-title">
        <h2></h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <main id="main">

        <!-- ======= Breadcrumbs ======= -->
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Berita</h2>
              <ol>
                <li><a href="/berita">Media</a></li>
                <li>Berita Kota Bandung</li>
              </ol>
            </div>

</section>
    
            <section id="portfolio-details" class="portfolio-details">
              <div class="container">
                <div class="d-grid gap-3">

                  @foreach ($data['berita'] as $berita)
      
                  <div class="card mb-3" style="max-width: 1000px;">
                    <div class="row g-0">
                      
                      <div class="col-md-2">
                        <img src="/img/{{$berita->foto_berita}}" class="img-fluid rounded-start" width="200">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$berita->judul_berita}}</h5>
                          <p class="card-text">{{$berita->highlight_berita}}</p>
                        </div>
                      </div>
                      <div class="card-footer">
                        <a href="/berita/{{$berita->id}}/vberita" class="btn btn-sm btn-outline-secondary btn-end">View</a>
                    </div>
                    </div>
                  </div>
      
                  @endforeach

                    <div class="pagination justify-content-start">
                      {!! $data['berita']->links ('vendor.pagination.simple-bootstrap-5') !!}
                    </div>

                 
                  
              </div>

        </div>

        </section><!-- End Breadcrumbs -->

    </main>


      
@endsection