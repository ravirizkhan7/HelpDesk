<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HelpDesk - Diskominfo Pariaman</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/d/d6/Lambang_Kota_Pariaman.png">

  <!-- AOS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- iLanding CSS -->
  <link href="https://bootstrapmade.com/demo/templates/iLanding/assets/css/main.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
@if($errors->any())
@foreach ($errors->all() as $error)
    <script>
        Swal.fire({
        title: "Terjadi Kesalahan!",
        text: "{{ $error }}",
        icon: "error"
        });
    </script>
@endforeach
@endif
@if (session('verify'))
<script>
    Swal.fire({
        title: "Email Belum Diverifikasi",
        text: "{{ session('verify') }}",
        icon: "warning"
    });
</script>
@endif

<section class="section" style="padding-top: 40px;">
  <div class="container d-flex justify-content-center">

    <div class="card shadow p-4 border-0" 
         style="max-width: 850px; width: 100%; border-radius: 18px;">

      <!-- Tabs -->
      <ul class="nav nav-tabs justify-content-center border-0 mb-4">
        <li class="nav-item">
          <a class="nav-link active border-0"
             style="font-size: 1.1rem; font-weight: 500;"
             data-bs-toggle="tab" data-bs-target="#login-clean">
            Login
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-0"
             style="font-size: 1.1rem; font-weight: 500;"
             data-bs-toggle="tab" data-bs-target="#register-clean">
            Registrasi
          </a>
        </li>
      </ul>

      <!-- CONTENT -->
      <div class="tab-content">

        <!-- LOGIN -->
        <div class="tab-pane fade show active" id="login-clean">
          <div class="row align-items-center g-4">
            <div class="col-lg-6">
              <form action="{{ route('login.proses') }}" method="POST" onsubmit="const submitBtn 
              = document.getElementById('submitBtn'); submitBtn.disabled = true; 
              submitBtn.textContent = 'Memproses...';">
              @csrf
              @method('POST')
                <h3 class="text-center mb-2" style="font-weight: 600;">Masuk</h3>
                <p class="text-center text-muted" style="font-size: 0.95rem;">
                  Akses Pelaporan layanan jaringan dan sistem internal dengan cepat.
                </p>

                <div class="mt-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control form-control-lg"
                        placeholder="contoh@gmail.com" name="email" id="inputEmail" value="{{ old('email') }}">
                </div>

                <div class="mt-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control form-control-lg"
                        placeholder="Masukkan password" name="password" id="inputPassword">
                </div>

                <button id="submitBtn" class="btn btn-primary w-100 mt-4 py-2"
                        style="font-size: 1rem; border-radius: 10px;">
                  Login
                </button>
              </form>
            </div>

            <div class="col-lg-6 text-center">
              <img src="https://bootstrapmade.com/demo/templates/iLanding/assets/img/features-illustration-1.webp"
                   class="img-fluid" style="max-height: 280px;">
            </div>

          </div>
        </div>

        <!-- REGISTER -->
        <div class="tab-pane fade" id="register-clean">
          <form action="{{ route('register') }}" method="POST">
            @csrf
            @method('POST')
            <div class="row align-items-center g-4">

              <div class="col-lg-6">
                <h3 class="text-center mb-2" style="font-weight: 600;">Buat Akun</h3>
                <p class="text-center text-muted" style="font-size: 0.95rem;">
                  Registrasi cepat untuk mulai menggunakan Pelaporan layanan.
                </p>

                <div class="mt-3">
                  <label class="form-label">Nama Lengkap</label>
                  <input type="text" name="name" class="form-control form-control-lg"
                        placeholder="Masukkan nama" required>
                </div>

                <div class="mt-3">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" class="form-control form-control-lg"
                        placeholder="contoh@gmail.com" required>
                </div>

                <div class="mt-3">
                  <label class="form-label">Password</label>
                  <input type="password" name="password" class="form-control form-control-lg"
                        placeholder="Minimal 8 karakter" required>
                </div>

                <button type="submit" class="btn btn-success w-100 mt-4 py-2"
                        style="font-size: 1rem; border-radius: 10px;">
                  Registrasi
                </button>
              </div>

              <div class="col-lg-6 text-center">
                <img src="https://bootstrapmade.com/demo/templates/iLanding/assets/img/features-illustration-2.webp"
                    class="img-fluid" style="max-height: 280px;">
              </div>

            </div>
          </form>
        </div>


      </div>

    </div>

  </div>
</section>


<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>

</body>
</html>
