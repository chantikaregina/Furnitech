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
                            <h3><a href="{{ route('service.details') }}">Lorem Ipsum</a></h3>
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
                        Furnitech adalah perusahaan inovatif yang bergerak di bidang desain, produksi, dan distribusi
                        furnitur berkualitas tinggi. Berdiri sejak 2024, kami berkomitmen untuk menghadirkan
                        produk furnitur yang menggabungkan estetika modern, kenyamanan, dan fungsionalitas, sesuai dengan
                        kebutuhan pelanggan kami.
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
                            <p style="font-size: 18px;">Menjadi penyedia solusi furnitur terdepan yang menginspirasi gaya
                                hidup modern dengan inovasi, kualitas, dan keberlanjutan.</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <i class="bi bi-broadcast flex-shrink-0"></i>
                        <div>
                            <h4>Our Mission</h4>
                            <ul>
                                <li style="list-style-type: disc;"><span>
                                        <p style="font-size: 18px;">Menyediakan Furnitur Berkualitas Tinggi.
                                            Menghadirkan produk furnitur dengan desain modern, material premium, dan daya
                                            tahan tinggi untuk memenuhi kebutuhan pelanggan.</p>
                                    </span></li>
                                <li style="list-style-type: disc;"><span>
                                        <p style="font-size: 18px;">Mengutamakan Kepuasan Pelanggan.
                                            Memberikan layanan terbaik dengan fokus pada kebutuhan dan kenyamanan pelanggan,
                                            menciptakan pengalaman belanja yang memuaskan.</p>
                                    </span></li>
                                <li style="list-style-type: disc;"><span>
                                        <p style="font-size: 18px;">Mendorong Inovasi dalam Desain.
                                            Terus menciptakan furnitur fungsional yang memadukan estetika, kenyamanan, dan
                                            efisiensi ruang.</p>
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
                            <img src="{{ asset('assets_two/img/masonry-portfolio/masonry-portfolio-1.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assets_two/img/masonry-portfolio/masonry-portfolio-1.jpg') }}"
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

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets_two/img/testimonials/testimonials-1.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets_two/img/testimonials/testimonials-2.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets_two/img/testimonials/testimonials-3.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets_two/img/testimonials/testimonials-4.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets_two/img/testimonials/testimonials-5.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

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
            <p>our Team</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets_two/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets_two/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets_two/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets_two/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>



    </section><!-- /Contact Section -->
@endsection
