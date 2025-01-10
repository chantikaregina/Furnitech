@extends('frontend.layout.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="{{ asset('assets_two/img/furniture.jpg') }}" alt="" data-aos="fade-in">

        <div class="container">

            <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-6 col-lg-8">
                    <h2>the best furniture solutions<span>.</span></h2>
                    <p> to beautify your room</p>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                @foreach ($services as $service)
                    <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-binoculars"></i>
                            <!-- Menggunakan properti 'name' dari objek $service untuk menampilkan nama layanan -->
                            <h3><a href="{{ route('service.details', $service->id_service) }}">{{ $service->company_name }}</a></h3>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="500">

            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('assets_two/img/furniture.1.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <h3 style="font-size: 32px;">get to know furniture</h3>
                    <p style="font-size: 20px;">
                        Furnitech is an innovative company engaged in the design, production and distribution of
                        of high-quality furniture. Established since 2024, we are committed to delivering
                        furniture products that combine modern aesthetics, comfort, and functionality, according to the
                        the needs of our customers.
                    </p>
                    <p style="font-size: 20px;">
                        Our achievements would not have been possible without your help:
                    </p>
                    <ul>
                        <li style="font-size: 18px;"><i class="bi bi-check2-all"></i> <span>1 million++ loyal
                                customers</span></li>
                        <li style="font-size: 18px;"><i class="bi bi-check2-all"></i> <span>100,000++ products
                                available</span></li>
                        <li style="font-size: 18px;"><i class="bi bi-check2-all"></i> <span>2,000++ interior design projects
                                every year</span></li>
                        <li style="font-size: 18px;"><i class="bi bi-check2-all"></i> <span>250++ interior designer partners
                                who work with us</span></li>
                    </ul>
                </div>
            </div>

        </div>

    </section>
    <!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
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
        },
        "breakpoints": {
          "320": {
            "slidesPerView": 2,
            "spaceBetween": 40
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 40
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 60
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 80
            },
            "992": {
              "slidesPerView": 6,
              "spaceBetween": 120
            }
          }
        }
      }
    </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ asset('assets_two/img/clients/kerja1.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets_two/img/clients/kerja2.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets_two/img/clients/kerja3.jpg') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets_two/img/clients/kerja4.jpeg') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets_two/img/clients/kerja5.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets_two/img/clients/kerja6.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets_two/img/clients/kerja7.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets_two/img/clients/kerja8.jpeg') }}"
                            class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <div class="container">

            <div class="row gy-4">
                <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img
                        src="{{ asset('assets_two/img/furniture3.jpg') }}" alt=""></div>
                <div class="col-lg-6">

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-archive flex-shrink-0"></i>
                        <div>
                            <h4>Our Vision</h4>
                            <p style="font-size: 18px;">To be the leading provider of furniture solutions that inspire modern lifestyles with innovation, quality and sustainability.
                                lifestyle with innovation, quality and sustainability.</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <i class="bi bi-broadcast flex-shrink-0"></i>
                        <div>
                            <h4>Our Mission</h4>
                            <ul>
                                <li style="list-style-type: disc;"><span>
                                        <p style="font-size: 18px;">Providing High Quality Furniture.
                                            Delivering furniture products with modern designs, premium materials, and high
                                            durability to meet customer needs.</p>
                                    </span></li>
                                <li style="list-style-type: disc;"><span>
                                        <p style="font-size: 18px;">Prioritizing Customer Satisfaction.
                                            Providing the best service with a focus on customer needs and convenience,
                                            creating a satisfying shopping experience.</p>
                                    </span></li>
                                <li style="list-style-type: disc;"><span>
                                        <p style="font-size: 18px;">Driving Innovation in Design.
                                            Continuing to create functional furniture that combines aesthetics, comfort, and space
                                            space efficiency.</p>
                                    </span></li>
                            </ul>
                        </div>
                    </div><!-- End Features Item-->



                </div>
            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="{{ asset('assets_two/img/background2.jpg') }}" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Furnitech</h3>
                        <p>Not limited to home contents and furniture, the products and services we offer include:</p>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Check our Portfolio</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($portfolios as $portfolio)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('storage/' . $portfolio->foto) }}"
                                class="img-fluid" alt="" style="width: 450px; height: 450px; object-fit: cover;">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('storage/' . $portfolio->foto) }}"
                                    title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{ route('portfolio.details', $portfolio->id_portfolio) }}" title="More Details"
                                    class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

  <img src="{{ asset('assets_two/img/background2.jpg') }}" class="testimonials-bg" alt="">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
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
      <div class="swiper-wrapper">

      @foreach($testimonis as $testimoni)
        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>{{ $testimoni->name }}</h3>
            <div class="stars justify-content-center">
                @for ($i = 1; $i <= 5; $i++)
                    <i class=" {{ $i <= $testimoni->rating ? 'bi bi-star-fill' : 'bi bi-star' }} "></i>
                    @endfor
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>{{ $testimoni->review }}</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->

<!-- Team Section -->
<section id="team" class="team section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
    <h2>Team</h2>
    <p>Our Team</p>
</div><!-- End Section Title -->

<div class="container">

    <div class="row gy-4 justify-content-center">

      @foreach ($teams as $team)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member">
                  <div class="member-img">
                      <img src="{{ asset('storage/' . $team->foto) }}" class="img-fluid"
                          alt="">
                      <div class="social">
                          <a href=""><i class="bi bi-twitter-x"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                  </div>
                  <div class="member-info">
                      <h4>{{ $team->nama_team}}</h4>
                      <span>{{ $team->jabatan}}</span>
                  </div>
              </div>
          </div><!-- End Team Member -->
      @endforeach
    </div>

  </div>

</section><!-- /Contact Section -->

    <!-- Review Section -->
<section id="review" class="review section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Leave a Review</h2>
    <p>We value your feedback</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <!-- Review Form -->
        <form action="{{ route('testimoni') }}" method="POST">
          @csrf
          <div class="row">
            <div class="col-xl-6 col-md-6">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
            </div>
            <div class="col-xl-6 col-md-6">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="mb-3 mt-3">
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control" name="review" rows="5" placeholder="Your Review" required></textarea>
                </div>
              </div>
            </div>
            <div class="mb-3">
            <div class="col-12">
                <div class="form-group">
                  <label for="rating">Rating:</label>
                  <div id="rating" class="stars">
                    <span data-value="1" class="star"><i class="bi bi-star"></i></span>
                    <span data-value="2" class="star"><i class="bi bi-star"></i></span>
                    <span data-value="3" class="star"><i class="bi bi-star"></i></span>
                    <span data-value="4" class="star"><i class="bi bi-star"></i></span>
                    <span data-value="5" class="star"><i class="bi bi-star"></i></span>
                  </div>
                  <input type="hidden" name="rating" id="rating-value" value="0">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="text-center">
                <button type="submit" class="btn btn-warning">Submit Review</button>
              </div>
            </div>
          </div>
        </form><!-- End Review Form -->
      </div>

      <!-- Add the following JavaScript to handle the star rating interaction -->
  <script>
    const stars = document.querySelectorAll('.star');
    const ratingValue = document.getElementById('rating-value');

    stars.forEach(star => {
      star.addEventListener('click', () => {
        const value = star.getAttribute('data-value');
        
        // Set the rating value in the hidden input
        ratingValue.value = value;
        
        // Change the icon color based on the rating
        stars.forEach(star => {
          if (star.getAttribute('data-value') <= value) {
            star.querySelector('i').classList.add('bi-star-fill');
            star.querySelector('i').classList.remove('bi-star');
          } else {
            star.querySelector('i').classList.remove('bi-star-fill');
            star.querySelector('i').classList.add('bi-star');
          }
        });
      });
    });
  </script>

  <!-- Add the following CSS to style the stars -->
  <style>
    .stars {
      display: flex;
      gap: 5px;
      cursor: pointer;
    }

    .star i {
      font-size: 30px;
      color: #ccc; /* Default grey color */
      transition: color 0.3s ease;
    }

    /* Remove hover effect */
    /* .star:hover i, .star:hover ~ .star i {
      color: #f39c12; 
    } */

    .star i.bi-star-fill {
      color: #f39c12; /* Yellow color for filled stars */
    }

    .star i.bi-star {
      color: #ccc; /* Grey color for empty stars */
    }
  </style>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <!-- Review Info -->
        <div class="info">
          <h4>Why Leave a Review?</h4>
          <p>We appreciate your thoughts on our services and products. Your feedback helps us improve and serve you better. Please let us know about your experience.</p>
          <p>Your review will be visible on our website to help others make informed decisions.</p>
        </div>
      </div>

    </div>
  </div>
</section><!-- /Review Section -->

@endsection
