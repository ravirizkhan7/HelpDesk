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


<!-- Modal 2: Form Cek Email -->
<div class="modal fade" id="modal2" tabindex="-1">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">Formulir Layanan Cek Email</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <!-- NAV PILLS SWITCH -->
        <ul class="nav nav-pills mb-3 justify-content-center" id="cekemail-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pegawai-tab2" data-bs-toggle="pill"
              data-bs-target="#pegawai-form2" type="button" role="tab">Pegawai</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="nonpegawai-tab2" data-bs-toggle="pill"
              data-bs-target="#nonpegawai-form2" type="button" role="tab">Non-Pegawai</button>
          </li>
        </ul>

        <div class="tab-content">

          <!-- FORM PEGAWAI -->
          <div class="tab-pane fade show active" id="pegawai-form2" role="tabpanel">
            
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
                <label class="form-label">Email Lain Pendaftar</label>
                <input type="email" class="form-control" name="email_lain" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Email Ajuan</label>
                <input type="email" class="form-control" name="email_ajuan" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
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
          <div class="tab-pane fade" id="nonpegawai-form2" role="tabpanel">

            <form method="POST" action="">
              @csrf

              <div class="mb-3">
                <label class="form-label">Organisasi</label>
                <input type="text" class="form-control" name="organisasi_np" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Email Lain Pendaftar</label>
                <input type="email" class="form-control" name="email_lain_np" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Email Ajuan</label>
                <input type="email" class="form-control" name="email_ajuan_np" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password_np" required>
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


<!-- Modal 4: Form Hosting -->
<div class="modal fade" id="modal4" tabindex="-1">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">Formulir Layanan Hosting</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <!-- NAV PILLS SWITCH -->
        <ul class="nav nav-pills mb-3 justify-content-center" id="hosting-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pegawai-tab4" data-bs-toggle="pill"
              data-bs-target="#pegawai-form4" type="button" role="tab">Pegawai</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="nonpegawai-tab4" data-bs-toggle="pill"
              data-bs-target="#nonpegawai-form4" type="button" role="tab">Non-Pegawai</button>
          </li>
        </ul>

        <div class="tab-content">

          <!-- FORM PEGAWAI -->
          <div class="tab-pane fade show active" id="pegawai-form4" role="tabpanel">

            <form method="POST" action="">
              @csrf

              <input type="hidden" name="status" value="pegawai">

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
                <label class="form-label">Nama Domain</label>
                <input type="text" class="form-control" name="nama_domain" required>
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
          <div class="tab-pane fade" id="nonpegawai-form4" role="tabpanel">

            <form method="POST" action="">
              @csrf

              <input type="hidden" name="status" value="nonpegawai">

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
                <label class="form-label">Nama Domain</label>
                <input type="text" class="form-control" name="nama_domain" required>
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

        </div>

      </div>

    </div>
  </div>
</div>

