@extends('template/index')
@section('content')

<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner">

      <div class="carousel" style="background-image: url(/img/tic/banner1.jpg)" alt="mountains">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown"><span>Destinasi Wisata Kota Bandung</span></h2>
            <p class="animate__animated animate__fadeInUp">Mari jelajah Kota Bandung bersama kami.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ======= Destinasiwisata Section ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">


      <div class="section-title mt-5">
        <h2>Destinasi Pilihan di Kota Bandung</h2>
        <p style="text-align: left">Bandung bukan hanya sebuah kota yang menjadi rumah bagi jutaan warganya. Lebih dari itu, Bandung adalah kisah dan sejarah yang telah bergulir lebih dari dua abad silam. Sejak dahulu, Bandung mahsyur akan kemolekannya. Kota yang dikelilingi pegunungan ini menyimpan berjuta keunikan. Berbagai destinasi wisata menarik, mulai dari wisata kuliner, wisata sejarah, wisata edukasi, wisata belanja hingga tempat rekreasi bisa ditemukan di Kota Bandung.</p>
        <div class="container mt-3 mb-3">
        <img src="/img/tic/pindai.jpg" alt="" width="700">
      </div>
        <p style="text-align: left">Selain dikenal sebagai Paris Van Java dan Kota Kembang, Bandung pun dijuluki The Most European City in The East Indies, Bandung Excelsior, Intelectuele Centrum Van Indie, Eurpoe in The Tropen, Kota Permai, Kota Pendidikan, hingga Kota Kreatif dan Kota Kuliner. Pada 21 Mei 2022, Kota Bandung juga resmi mendeklarasikan diri sebagai Bandung Kota Angklung.</p>
      </div>

      
      <div class="section-title">
        <h2>Keunikan Bangunan Heritage di Kota Bandung</h2>
        <p style="text-align: left">Kota Bandung merupakan salah satu kota yang didirikan pada masa Pemerintahan Kolonial Belanda. Letak geografis serta kesuburan lingkungannya menjadi daya tarik tersendiri bagi Pemerintah Kolonial untuk membangun sebuah Kota Pusat Pemerintahan kala itu. Hal tersebut bisa dilihat dari banyaknya bangunan-bangunan bergaya arsitektur Eropa yang ada di Kota Bandung.</p>
        <div class="container mt-3 mb-3">
        <img src="/img/tic/bangunan.jpg" alt="" width="700">
        </div>
        <p style="text-align: left">Bangunan-bangunan heritage di Kota Bandung terus dijaga kelestariannya, selain sebagai saksi sejarah perjalanan panjang negeri ini, juga menjadi salah satu tujuan wisata yang diminati oleh banyak wisatawan baik lokal maupun mancanegara.</p>
      </div>
      

      <div class="section-title">
        <h2>Ragam Kuliner Kota Bandung</h2>
        <p style="text-align: left">Salah satu alasan wisatawan datang ke Kota Bandung adalah untuk mencicipi beragam kuliner khas Kota Bandung yang terkenal dengan kelezatannya. Mulai dari kuliner tradisional sampai kuliner masa kini yang sukses menjadi buah bibir di masyarakat Indonesia hingga menjadi daya tarik wisatawan untuk datang ke Kota Bandung.</p>
        <div class="container mt-3 mb-3">
        <img src="/img/tic/tumpeng.jpg" alt="" width="700">
        </div>
        <p style="text-align: left">Selain kuliner yang beragam dan terkenal dengan kelezatannya, destinasi wisata di Kota Bandung juga diminati karena memiliki tempat yang menarik untuk dijadikan lokasi berfoto selfie dan juga instagramable. Hal tersebut cocok bagi para wisatawan yang ingin mengabadikan momen seru bersama rekan, kerabat, atau keluarga tercinta.</p>
      </div>

      <div class="section-title">
        <h2> Akses Menuju Kota Bandung</h2>
        <p style="text-align: left">Untuk berkunjung ke Kota Bandung, Wargi bisa menggunakan kendaraan pribadi ataupun umum. Ada sekitar 8 gerbang tol yang bisa Wargi tempuh untuk berkunjung ke Kota Bandung. Selain itu, Wargi juga bisa menggunakan moda transportasi Kereta Api dan Pesawat.

          Kota Bandung sendiri memiliki banyak pilihan akomodasi, baik itu Hotel Bintang 5 hingga homestay yang berada di sekitar lokasi destinasi wisata.
          
          Tunggu apalagi, ayo segera datang ke Kota Bandung sekarang juga!</p>
        <div class="container mt-3 mb-3">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/GXMH-pt1QOY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

     
      
      <main id="main">

        <!-- ======= Breadcrumbs ======= -->
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Destinasi Wisata</h2>
              <ol>
                <li><a href="/destinasiwisata">Destinasi Wisata</a></li>
                <li>Destinasi Wisata Kota Bandung</li>
              </ol>
            </div>

</section>
    
            <section id="portfolio-details" class="portfolio-details">
              <div class="container">
                

                  <div class="row align-items-start">
                  
                    <div class="col">
                      <div class="row row-cols-md-4 g-5">
                        @foreach ($data['destinasiwisata'] as $destinasi)
                        <div class="col">
                          <div class="card h-100">
                            <img src="/img/{{$destinasi->foto_destinasi}}" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title" style="text-align: left">{{$destinasi->judul_destinasi}}</h5>
                              <div style="text-align: left">{{$destinasi->kategori_destinasi}}</div>
                            </div>
                            <div class="card-footer">
                              <a href="/destinasiwisata/{{$destinasi->id}}/vdestinasi" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                          </div>
                        </div>
                        @endforeach

                        <div class="pagination justify-content-start ms-4">
                          {!! $data['destinasiwisata']->links ('vendor.pagination.simple-bootstrap-5') !!}
                        </div>
                        
                    </div>
                    </div>

                    

                    {{-- <div class="col" class="peta-responsive">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253497.17009147344!2d107.35639131641598!3d-6.903363818269833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1662638818425!5m2!1sid!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> --}}

                  </div>
              </div>

                  

        </section>
        
        
        <!-- End Breadcrumbs -->

    </main>


      
@endsection

