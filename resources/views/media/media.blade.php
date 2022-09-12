@extends('template/index')
@section('content')

<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner">

      <div class="carousel-item active" style="background-image: url(/img/tic/medsos.jpg)" alt="mountains">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown"><span>Media Sosial</span></h2>
            <p class="animate__animated animate__fadeInUp">Mari jelajah Kota Bandung bersama kami.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ======= Media Section ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

      <div class="section-title mt-5">
        <h2>Follow Us</h2>
        <p></p>
      </div>

      <main id="main">

        <!-- ======= Breadcrumbs ======= -->
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Media</h2>
              <ol>
                <li><a href="/media">Media</a></li>
                <li>Media Sosial</li>
              </ol>
            </div>




        <div class="tagembed-container" style="width:100%;height:100%;overflow: auto"><div class="tagembed-socialwall" data-wall-id="62280" view-url="https://widget.tagembed.com/62280?view">  </div> 
        <script src="//widget.tagembed.com/embed.min.js" type="text/javascript"></script></div>

        <div class="container"><blockquote class="tiktok-embed" cite="https://www.tiktok.com/@tic.bandung" data-unique-id="tic.bandung" data-embed-type="creator" style="max-width: 1080px; min-width: 288px;" > <section> <a target="_blank" href="https://www.tiktok.com/@tic.bandung?refer=creator_embed">@tic.bandung</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
        </div>

        <div loading="lazy" data-mc-src="ecaa4058-8538-4ab6-aa65-e118e9628ed9#null"></div>
          
          <script 
            src="https://cdn2.woxo.tech/a.js#63050efcc189011ad9598ddb" 
            async data-usrc>
          </script>



      </main>
      </div>
  </section>
      
@endsection