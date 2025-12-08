<!-- Services Section -->
    <section id="services" class="services section light-background">
        
      <!-- Section Title -->
      <div class="container section-title mt-3" data-aos="fade-up">&nbsp;
        <h2>Layanan Pelaporan</h2>
        <p>Helpdesk Dinas Komunikasi dan Informatika Kota Pariaman</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center g-4">

            <!-- Card 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#modal1">
                    <div class="card shadow border-0 h-100 text-center card-hover" data-aos="fade-up">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-wifi display-4 text-primary"></i>
                            </div>
                            <h5 class="card-title">Layana Jaringan</h5>
                            <p class="card-text">Layanan pelaporan khusus masalah jaringan</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#modal2">
                    <div class="card shadow border-0 h-100 text-center card-hover" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-envelope-paper display-6 text-primary"></i>
                            </div>
                            <h5 class="card-title">Layanan Cek Email</h5>
                            <p class="card-text">Layanan untuk cek email anda.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#modal3">
                    <div class="card shadow border-0 h-100 text-center card-hover" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-award display-6 text-primary"></i>
                            </div>
                            <h5 class="card-title">Layanan Sertifikat Elektronik</h5>
                            <p class="card-text">Laynan untuk mencek sertifikat electronik anda.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#modal4">
                    <div class="card shadow border-0 h-100 text-center card-hover" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-cloud-upload display-6 text-primary"></i>
                            </div>
                            <h5 class="card-title">Layanan Hosting</h5>
                            <p class="card-text">Ajukan hosting untuk aplikasi atau situs web anda.</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        {{-- moda untuk card diatas --}}
        @include('user.modallayanan')

      </div>

    </section><!-- /Services Section -->