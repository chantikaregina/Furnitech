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

          <div class="row align-items-center">
            <div class="col-lg-6">
              <img src="{{ asset('storage/' . $service->foto) }}" 
                  style="width: 100%; height: auto; object-fit: cover;" 
                  alt="" class="img-fluid services-img">
            </div>
            <div class="col-lg-6">
              <h3>{{ $service->company_name }}</h3>
              <p style="font-size: 16px;">
                Perbaikan furniture seperti lemari, meja makan, sofa, kursi tamu, tempat tidur dan berbagai jenis furniture rumah tangga. 
                Utama Furniture yang memproduksi berbagai jenis produk furniture dengan kualitas terbaik. Selain itu kami juga melayani jasa reparasi furniture dengan pengrajin yang profesional. 
                Kami bersedia datang ke lokasi untuk memperbaiki perabotan rumah tangga anda yang rusak atau dirakit. Mengenai harga jasa kami, Anda dapat melakukan negosiasi terlebih dahulu sebelum jasa datang ke lokasi. 
                Jenis-jenis furniture yang dapat kami perbaiki antara lain sebagai berikut.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Quality Nomor 1.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Proses Cepet.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Seumur hidup tahan lama.</span></li>
              </ul>
              <p style="font-size: 16px;">
                Keuntungan menggunakan jasa kami adalah kami menyediakan pengrajin profesional yang sangat handal dan tentunya siap membantu anda dengan sepenuh hati.
              </p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="help-box d-flex flex-column justify-content-center align-items-center bg-white p-4 shadow-sm">
              <i class="bi bi-headset help-icon"></i>
              <h4>Have a Question?</h4>
              <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span></p>
              <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">contact@furnitech.com</a></p>
            </div>
          </div>



        </div>

      </div>

    </section><!-- /Service Details Section -->

    @endsection