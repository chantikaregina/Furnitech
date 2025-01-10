<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Furnitech</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets_two/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets_two/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_two/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_two/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_two/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_two/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_two/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets_two/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: white;">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename" style="color: rgba(0, 0, 0, 0.8);">FT</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}" class="active" style="color: rgba(0, 0, 0, 0.8);">Home<br></a>
                    </li>
                    <li><a href="#portfolio" style="color: rgba(0, 0, 0, 0.8);">Portfolio</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="" href="#" style="color: rgba(0, 0, 0, 0.8);"></a>

        </div>
    </header>

    <main class="main">

        @yield('content')

    </main>

    <footer id="footer" class="footer dark-background">

            <div class="footer-top">
            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">
                                @if($companyInfo && $companyInfo->company_name) 
                                    {{ $companyInfo->company_name }}
                                @else
                                    Name tidak ditemukan
                                @endif
                            </span>
                        </a>

                        <div class="footer-contact pt-3">
                            <p><strong>Alamat</strong></p>
                            <p>
                                @if ($companyInfo && $companyInfo->alamat)
                                    {{ $companyInfo->alamat }}
                                @else
                                    Alamat Kosong
                                @endif
                            </p>
                            <p class="mt-3"><strong>Phone:</strong> <span>
                                    @if ($companyInfo && $companyInfo->telepon)
                                        {{ $companyInfo->telepon }}
                                    @else
                                        Telepon Kosong
                                    @endif
                                </span></p>
                            <p><strong>Email:</strong> <span>
                                    @if ($companyInfo && $companyInfo->email)
                                        {{ $companyInfo->email }}
                                    @else
                                        Email Kosong
                                    @endif
                                </span></p>
                        </div>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="copyright">
            <div class="container text-center">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">FT</strong> <span>All Rights Reserved</span>
                </p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
                        href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>

    </footer>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets_two/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_two/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets_two/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets_two/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets_two/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets_two/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_two/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_two/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets_two/js/main.js') }}"></script>

</body>

</html>
