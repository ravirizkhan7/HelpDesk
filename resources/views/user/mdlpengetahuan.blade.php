 <!-- Modal 5 -->
<div class="modal fade" id="modal5" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">Data Materi Pengetahuan</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <!-- BUTTON SWITCH -->
        <div class="d-flex justify-content-end mb-3">
          <button id="switchBtn" class="btn btn-primary">Tambah</button>
        </div>

        <!-- ====== VIEW 1: TABEL ====== -->
        <div id="tabelWrapper">

          <div class="table-responsive shadow-sm">
            <table class="table table-bordered rounded overflow-hidden">
              <thead class="bg-primary text-white text-center">
                <tr>
                  <th>No</th>
                  <th>Judul Materi</th>
                  <th>Sumber</th>
                  <th>File</th>
                  <th>Tanggal Upload</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td>Panduan Keamanan Siber</td>
                  <td>Diskominfo</td>
                  <td class="text-center">
                    <i class="bi bi-file-earmark-pdf-fill text-danger fs-4"></i>
                  </td>
                  <td>10 Desember 2025</td>
                </tr>

                <tr>
                  <td class="text-center">2</td>
                  <td>Pemanfaatan Cloud Hosting</td>
                  <td>Kemenkominfo</td>
                  <td class="text-center">
                    <i class="bi bi-file-earmark-pdf-fill text-danger fs-4"></i>
                  </td>
                  <td>09 Desember 2025</td>
                </tr>

                <tr>
                  <td class="text-center">3</td>
                  <td>Etika Komunikasi Digital</td>
                  <td>Kominfo RI</td>
                  <td class="text-center">
                    <i class="bi bi-file-earmark-pdf-fill text-danger fs-4"></i>
                  </td>
                  <td>05 Desember 2025</td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>

        <!-- ====== VIEW 2: FORM ====== -->
        <div id="formWrapper" class="d-none">

          <form method="POST" action="" enctype="multipart/form-data">

            <div class="mb-3">
              <label class="form-label">Judul Materi</label>
              <input type="text" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Sumber</label>
              <input type="text" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">File PDF</label>
              <input type="file" class="form-control" accept="application/pdf" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Simpan Materi</button>
          </form>

        </div>

      </div>

    </div>
  </div>
</div>

<!-- JS modal 5 -->
<script>
  const switchBtn = document.getElementById('switchBtn');

  switchBtn.addEventListener('click', function () {

    let tabel = document.getElementById('tabelWrapper');
    let form = document.getElementById('formWrapper');

    if (tabel.classList.contains('d-none')) {
      // Kembali ke TABEL
      tabel.classList.remove('d-none');
      form.classList.add('d-none');

      this.textContent = 'Tambah';
      this.classList.remove('btn-danger');
      this.classList.add('btn-primary');

    } else {
      // Masuk ke FORM
      tabel.classList.add('d-none');
      form.classList.remove('d-none');

      this.textContent = 'Kembali';
      this.classList.remove('btn-primary');
      this.classList.add('btn-danger');
    }
  });
</script>