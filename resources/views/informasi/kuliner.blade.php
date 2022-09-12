@extends('template/index')
@section('content')

<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner">

      <div class="carousel" style="background-image: url(/img/tic/banner1.jpg)" alt="mountains">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown"><span>Kuliner</span></h2>
            <p class="animate__animated animate__fadeInUp">Mari jelajah Kota Bandung bersama kami.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ======= Kulinerwisata Section ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="section-title">
      <h2></h2>
      <p></p>
    </div>
      
      <main id="main">

        <!-- ======= Breadcrumbs ======= -->
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Kuliner</h2>
              <ol>
                <li><a href="/kuliner">Kuliner</a></li>
                <li>Wisata Kuliner Kota Bandung</li>
              </ol>
            </div>
    
            <section id="portfolio-details" class="portfolio-details">
              <div class="container">
                

                  <div class="row align-items-start">
                    <div class="col">
                      <div class="row row-cols-md-3 g-4">
                        @foreach ($data['kuliner'] as $kuliner)
                        <div class="col">
                          <div class="card h-100">
                            <img src="/img/{{$kuliner->foto_kuliner}}" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title" style="text-align: left">{{$kuliner->judul_kuliner}}</h5>
                              <div style="text-align: left">{{$kuliner->kategori_kuliner}}</div>
                            </div>
                            <div class="card-footer">
                              <a href="/kuliner/{{$kuliner->id}}/vkuliner" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                          </div>
                        </div>
                        @endforeach

                        <div class="pagination justify-content-start">
                          {!! $data['kuliner']->links ('vendor.pagination.simple-bootstrap-5') !!}
                        </div>
                        
                    </div>
                    </div>
                  
                  </div>
              </div>

                  

        </section>
    
        
    </main>
  </div>
  </section>


      
@endsection

