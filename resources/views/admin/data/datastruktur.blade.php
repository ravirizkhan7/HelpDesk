<section id="data-struktur" class="laporan section light-background">

  <div class="container section-title" data-aos="fade-up">
    <h2>Data Bidang & Divisi</h2>
    <p>Informasi Bidang dan Divisi Dinas Komunikasi dan Informatika Kota Pariaman.</p>
  </div>

  <div class="container" data-aos="fade-up">
    <div class="row g-4 justify-content-center">

      <!-- CARD BIDANG KIRI -->
      <div class="col-lg-6">
        <div class="card shadow-sm p-3">
          <h5 class="mb-3 text-center">Bidang</h5>
          <div class="d-flex justify-content-between mb-3">
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahBidang">Tambah Bidang</button>
            <input type="text" id="globalSearchBidang" class="form-control form-control-sm w-50" placeholder="Cari bidang…">
          </div>
          <div class="table-responsive" style="max-height:300px; overflow-y:auto;">
            <table class="table table-bordered table-striped small">
              <thead class="table-primary">
                <tr>
                  <th>No</th>
                  <th>Nama Bidang</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="searchableBidang">
                <tr>
                  <td>1</td>
                  <td>IT Infrastruktur</td>
                  <td>
                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editBidang1">Edit</button>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusBidang1">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Keamanan Siber</td>
                  <td>
                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editBidang2">Edit</button>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusBidang2">Hapus</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- CARD DIVISI KANAN -->
      <div class="col-lg-6">
        <div class="card shadow-sm p-3">
          <h5 class="mb-3 text-center">Divisi</h5>
          <div class="d-flex justify-content-between mb-3">
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahDivisi">Tambah Divisi</button>
            <input type="text" id="globalSearchDivisi" class="form-control form-control-sm w-50" placeholder="Cari divisi…">
          </div>
          <div class="table-responsive" style="max-height:300px; overflow-y:auto;">
            <table class="table table-bordered table-striped small">
              <thead class="table-primary">
                <tr>
                  <th>No</th>
                  <th>Nama Divisi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="searchableDivisi">
                <tr>
                  <td>1</td>
                  <td>Teknologi Informasi</td>
                  <td>
                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editDivisi1">Edit</button>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusDivisi1">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Keuangan</td>
                  <td>
                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editDivisi2">Edit</button>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusDivisi2">Hapus</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- MODALS BIDANG -->
<!-- TAMBAH BIDANG -->
<div class="modal fade" id="tambahBidang" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Bidang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control mb-3" placeholder="Nama Bidang">
        <button class="btn btn-primary w-100">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- EDIT BIDANG -->
<div class="modal fade" id="editBidang1" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Bidang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control mb-3" value="IT Infrastruktur">
        <button class="btn btn-success w-100">Update</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editBidang2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Bidang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control mb-3" value="Keamanan Siber">
        <button class="btn btn-success w-100">Update</button>
      </div>
    </div>
  </div>
</div>

<!-- HAPUS BIDANG -->
<div class="modal fade" id="hapusBidang1" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Bidang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Apakah kamu yakin ingin menghapus <strong>IT Infrastruktur</strong>?</p>
        <button class="btn btn-danger w-100">Hapus</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="hapusBidang2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Bidang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Apakah kamu yakin ingin menghapus <strong>Keamanan Siber</strong>?</p>
        <button class="btn btn-danger w-100">Hapus</button>
      </div>
    </div>
  </div>
</div>

<!-- MODALS DIVISI -->
<!-- TAMBAH DIVISI -->
<div class="modal fade" id="tambahDivisi" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Divisi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control mb-3" placeholder="Nama Divisi">
        <button class="btn btn-primary w-100">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- EDIT DIVISI -->
<div class="modal fade" id="editDivisi1" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Divisi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control mb-3" value="Teknologi Informasi">
        <button class="btn btn-success w-100">Update</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editDivisi2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Divisi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control mb-3" value="Keuangan">
        <button class="btn btn-success w-100">Update</button>
      </div>
    </div>
  </div>
</div>

<!-- HAPUS DIVISI -->
<div class="modal fade" id="hapusDivisi1" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Divisi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Apakah kamu yakin ingin menghapus <strong>Teknologi Informasi</strong>?</p>
        <button class="btn btn-danger w-100">Hapus</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="hapusDivisi2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Divisi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Apakah kamu yakin ingin menghapus <strong>Keuangan</strong>?</p>
        <button class="btn btn-danger w-100">Hapus</button>
      </div>
    </div>
  </div>
</div>

<!-- SEARCH GLOBAL DEBOUNCE -->
<script>
  function debounce(fn, delay = 250) {
    let timer;
    return function () {
      clearTimeout(timer);
      timer = setTimeout(() => fn.apply(this, arguments), delay);
    };
  }

  // Bidang search
  const globalInputBidang = document.querySelector('#globalSearchBidang');
  globalInputBidang.addEventListener('input', debounce(() => {
    const keyword = globalInputBidang.value.toLowerCase();
    document.querySelectorAll('tbody.searchableBidang tr').forEach(row => {
      const text = row.innerText.toLowerCase();
      row.style.display = text.includes(keyword) ? '' : 'none';
    });
  }, 200));

  // Divisi search
  const globalInputDivisi = document.querySelector('#globalSearchDivisi');
  globalInputDivisi.addEventListener('input', debounce(() => {
    const keyword = globalInputDivisi.value.toLowerCase();
    document.querySelectorAll('tbody.searchableDivisi tr').forEach(row => {
      const text = row.innerText.toLowerCase();
      row.style.display = text.includes(keyword) ? '' : 'none';
    });
  }, 200));
</script>
