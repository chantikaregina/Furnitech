@extends('frontend.layout.app')

@section('content')

<!-- Page Title -->
<div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Service Details</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Service Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="service-box">
              <h4>Serices List</h4>
              <div class="services-list">
                <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Kitchen Set</span></a>
                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Backdrop</span></a>
                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Kursi & Sofa</span></a>
                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Lemari</span></a>
                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Custom Design</span></a>
              </div>
            </div><!-- End Services List -->

            <div class="help-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-headset help-icon"></i>
              <h4>Have a Question?</h4>
              <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span></p>
              <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">contact@furnitech.com</a></p>
            </div>

          </div>

          <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets_two/img/services.jpg') }}" style=" width: 700px; height: 500px; object-fit:cover;" alt="" class="img-fluid services-img">
            <h3>Furniture Thorough and Professional</h3>
            <p style="font-size: 16px;">Repair of furniture such as cupboards, dining tables, sofas, guest chairs, beds and various types of household furniture. Utama Furniture which produces various types of furniture products with the best quality. Apart from that, we also provide a furniture repair service, with professional craftsmen. We are willing to come to the location to repair your damaged or assembled household furniture. Regarding the price of our services, you can negotiate before the service comes to the location. The types of furniture that we can repair include the following.</p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Quality number 1.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Fast Process.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Long Lasting Lifetime.</span></li>
            </ul>
            <p style="font-size: 16px;">The advantage of using our services is that we provide professional craftsmen who are very reliable and of course ready to help you wholeheartedly. That is the reason why you should choose furniture repair services only for Jepara carving works.</p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

    @endsection