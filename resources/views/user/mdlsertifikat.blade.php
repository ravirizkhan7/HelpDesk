<!-- Modal 3: Form Sertifikat -->
<div class="modal fade" id="modal3" tabindex="-1">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">Formulir Layanan Sertifikat</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <!-- NAV PILLS SWITCH -->
        <ul class="nav nav-pills mb-3 justify-content-center" id="sertifikat-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pegawai-tab3" data-bs-toggle="pill"
              data-bs-target="#pegawai-form3" type="button" role="tab">Pegawai</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="nonpegawai-tab3" data-bs-toggle="pill"
              data-bs-target="#nonpegawai-form3" type="button" role="tab">Non-Pegawai</button>
          </li>
        </ul>

        <div class="tab-content">

          <!-- FORM PEGAWAI -->
          <div class="tab-pane fade show active" id="pegawai-form3" role="tabpanel">

            <form method="POST" action="">
              @csrf

              <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" class="form-control" name="nip">
              </div>

              <div class="mb-3">
                <label class="form-label">Organisasi</label>
                <input type="text" class="form-control" name="organisasi" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Unit Organisasi</label>
                <input type="text" class="form-control" name="unit_organisasi" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" required>
              </div>

              <div class="mb-4">
                <label class="form-label">No HP</label>
                <input type="text" class="form-control" name="no_hp" required>
              </div>

              <button type="submit" class="btn btn-primary w-100">Kirim Formulir</button>
            </form>

          </div>

          <!-- FORM NON PEGAWAI -->
          <div class="tab-pane fade" id="nonpegawai-form3" role="tabpanel">

            <form method="POST" action="">
              @csrf

              <div class="mb-3">
                <label class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik">
              </div>

              <div class="mb-3">
                <label class="form-label">Organisasi</label>
                <input type="text" class="form-control" name="organisasi_np" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email_np" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Unit Organisasi</label>
                <input type="text" class="form-control" name="unit_organisasi_np" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" class="form-control" name="jabatan_np" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap_np" required>
              </div>

              <div class="mb-4">
                <label class="form-label">No HP</label>
                <input type="text" class="form-control" name="no_hp_np" required>
              </div>

              <button type="submit" class="btn btn-primary w-100">Kirim Formulir</button>
            </form>

          </div>

        </div>

      </div>

    </div>
  </div>
</div>