@extends('frontend.layout.app')

@section('content')

<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Portfolio Details</h1>
          
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li class="current">Portfolio Details</li>
      </ol>
    </div>
  </nav>
</div><!-- End Page Title -->

<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper init-swiper">

          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>

          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="{{ asset('assets_two/img/portfolio/app-1.jpg') }}" alt="" style=" width: 700px; height: 500px; object-fit:cover;">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
          <h3>Project</h3>
          <ul>
            <li><strong>Category</strong>: furniture</li>
            <li><strong>Client</strong>: vinoti  living</li>
            <li><strong>Project date</strong>: 01 March, 2020</li>
            <li><strong>Project URL</strong>: <a href="#">www.furnitech.com</a></li>
          </ul>
        </div>
        <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
          <h2>furnitech</h2>
          <p>
          Since 2002, Furnitech has focused on quality and has had many loyal customers. We have consistently provided the best furniture for 20 years.
          </p>
        </div>
      </div>

    </div>

  </div>

</section><!-- /Portfolio Details Section -->

</main>

@endsection