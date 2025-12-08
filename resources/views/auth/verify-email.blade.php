<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/d/d6/Lambang_Kota_Pariaman.png">

  <!-- AOS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- iLanding CSS -->
  <link href="https://bootstrapmade.com/demo/templates/iLanding/assets/css/main.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="modal fade" id="verifyModal" tabindex="-1" aria-labelledby="verifyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" 
       style="max-width: 700px; width: 95%; margin: auto;">
       
    <div class="modal-content shadow-lg"
         style="border-radius: 1.8rem; padding: 1.5rem 1.8rem;">

      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title fw-bold" id="verifyModalLabel"
            style="font-size: 2rem; line-height: 1.3;">
          Verifikasi Email Dibutuhkan
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
            onclick="window.location.href='{{ route('login') }}'"></button>
      </div>

      <div class="modal-body text-secondary"
           style="font-size: 1.4rem; line-height: 1.7; margin-top: 0.5rem;">
        <b>
            Email kamu belum terverifikasi.  
            Silakan cek kotak masuk kamu untuk link verifikasi.  
            Kalau belum menerima, kamu bisa kirim ulang sekarang.
        </b>
      </div>

      <div class="modal-footer border-0 d-flex flex-column gap-3 w-100 mt-2">

        <button type="button"
                class="btn btn-secondary w-100 py-3"
                style="font-size: 1.3rem; border-radius: 0.8rem;"
                onclick="window.location.href='{{ route('login') }}'">
            OK
        </button>

        <form id="resend-form" method="POST"
              action="{{ route('verification.send') }}" class="w-100">
            @csrf
            <button type="submit"
                    class="btn btn-primary w-100 py-3"
                    style="font-size: 1.3rem; border-radius: 0.8rem;">
                Kirim Ulang
            </button>
        </form>

      </div>

    </div>
  </div>
</div>




<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>
<script>
    document.addEventListener("DOMContentLoaded", function () { var verifyModal = new bootstrap.Modal(document.getElementById('verifyModal')); verifyModal.show(); });
</script>