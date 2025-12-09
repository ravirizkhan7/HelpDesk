<!-- Modal Layanan jaringan -->
<div class="modal fade" id="modal1" tabindex="-1">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">Formulir Layanan Jaringan</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <!-- NAV PILLS SWITCH -->
        <ul class="nav nav-pills mb-3 justify-content-center" id="status-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pegawai-tab" data-bs-toggle="pill"
              data-bs-target="#pegawai-form" type="button" role="tab">Pegawai</button>
          </li>&nbsp;
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="nonpegawai-tab" data-bs-toggle="pill"
              data-bs-target="#nonpegawai-form" type="button" role="tab">Non-Pegawai</button>
          </li>
        </ul>

        <div class="tab-content">
          <!-- FORM PEGAWAI -->
          <div class="tab-pane fade show active" id="pegawai-form" role="tabpanel">

            <div class="mb-3">
              <label class="form-label">NIP</label>
              <input type="text" class="form-control" id="nip">
            </div>

            <div class="mb-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama_lengkap">
            </div>

            <div class="mb-3">
              <label class="form-label">Nama Organisasi</label>
              <input type="text" class="form-control" id="nama_organisasi">
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" id="email">
            </div>

            <div class="mb-3">
              <label class="form-label">Unit Organisasi</label>
              <input type="text" class="form-control" id="unit_organisasi">
            </div>

            <div class="mb-3">
              <label class="form-label">Keluhan</label>
              <textarea class="form-control" id="keluhan" rows="3"></textarea>
            </div>

            <div class="mb-3">
              <label class="form-label">No HP</label>
              <input type="text" class="form-control" id="no_hp">
            </div>

            <!-- FILE PENDUKUNG PEGAWAI -->
            <div class="mb-3">
              <label class="form-label">File Pendukung (opsional)</label>
              <input type="file" class="form-control" id="file_pegawai" multiple>
            </div>

          </div>

          <!-- FORM NON-PEGAWAI -->
          <div class="tab-pane fade" id="nonpegawai-form" role="tabpanel">

            <div class="mb-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama_lengkap_np">
            </div>

            <div class="mb-3">
              <label class="form-label">Instansi / Organisasi</label>
              <input type="text" class="form-control" id="instansi_np">
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" id="email_np">
            </div>

            <div class="mb-3">
              <label class="form-label">Keluhan</label>
              <textarea class="form-control" id="keluhan_np" rows="3"></textarea>
            </div>

            <div class="mb-3">
              <label class="form-label">No HP</label>
              <input type="text" class="form-control" id="no_hp_np">
            </div>

            <!-- FILE PENDUKUNG NON-PEGAWAI -->
            <div class="mb-3">
              <label class="form-label">File Pendukung (opsional)</label>
              <input type="file" class="form-control" id="file_nonpegawai" multiple>
            </div>

          </div>

        </div>
        <button type="submit" class="btn btn-primary w-100 mt-3">Kirim Formulir</button>

      </div>
    </div>
  </div>
</div>  
