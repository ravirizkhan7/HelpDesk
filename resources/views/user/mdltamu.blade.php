<!-- Modal 6: Buku Tamu -->
<div class="modal fade" id="modal6" tabindex="-1">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">
          <i class="bi bi-journal-bookmark-fill"></i> Buku Tamu Diskominfo
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data">
          @csrf

          <!-- NAMA -->
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" required>
          </div>

          <!-- BIDANG -->
          <div class="mb-3">
            <label class="form-label">Bidang</label>
            <input type="text" class="form-control" name="bidang" required>
          </div>

          <!-- INSTANSI -->
          <div class="mb-3">
            <label class="form-label">Instansi / Organisasi</label>
            <input type="text" class="form-control" name="instansi" required>
          </div>

          <!-- NO TELP -->
          <div class="mb-3">
            <label class="form-label">No. Telp</label>
            <input type="text" class="form-control" name="no_telp" required>
          </div>

          <!-- KEPERLUAN -->
          <div class="mb-3">
            <label class="form-label">Keperluan</label>
            <textarea class="form-control" name="keperluan" rows="3" required></textarea>
          </div>

          <!-- UPLOAD FOTO -->
          <div class="mb-3">
              <label for="foto" class="form-label">Upload Foto</label>
              <input type="file" name="foto" id="foto" class="form-control" accept="image/*" onchange="previewFoto(event)">
          </div>

          <!-- Preview langsung -->
          <div id="previewContainer" class="text-center mt-3" style="display:none;">
              <img id="previewImage" src="#" alt="Preview Foto" style="max-width: 100%; border-radius: 10px; margin-top: 10px;">
          </div>


          <!-- PERSETUJUAN -->
          <div class="mb-4 form-check">
            <input class="form-check-input" type="checkbox" id="persetujuan6" onchange="toggleSubmit6()">
            <label class="form-check-label" for="persetujuan6">
              Saya menyetujui pernyataan persetujuan dan perjanjian berikut
            </label>
            <small class="text-muted d-block mt-2" style="font-size: 0.9rem;">
              Bahwa dengan ini saya menyatakan telah diberikan akses terhadap informasi milik Dinas Komunikasi dan Informatika Kabupaten Kudus, serta tidak akan mengungkapkan informasi tersebut kepada pihak mana pun.
            </small>
          </div>

          <!-- SUBMIT -->
          <button type="submit" class="btn btn-primary w-100" id="submitBtn6" disabled>
            Simpan Buku Tamu
          </button>

        </form>
      </div>

    </div>
  </div>
</div>


{{-- js modal 6 --}}
<script>
  function previewFoto(event) {
    const file = event.target.files[0];
    const previewContainer = document.getElementById('previewContainer');
    const previewImage = document.getElementById('previewImage');

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewImage.src = e.target.result;
            previewContainer.style.display = 'block';
        };
        reader.readAsDataURL(file);
    } else {
        previewContainer.style.display = 'none';
        previewImage.src = "#";
    }
  }

  function toggleSubmit6() {
    const checkbox = document.getElementById('persetujuan6');
    const submitBtn = document.getElementById('submitBtn6');
    submitBtn.disabled = !checkbox.checked;
  }
</script>