<section id="layanan-jaringan" class="laporan section light-background">

  <div class="container section-title" data-aos="fade-up">
    <h2>Laporan Jaringan</h2>
    <p>Riwayat laporan gangguan jaringan.</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- SEARCH GLOBAL -->
    <div class="mb-4">
      <input type="text" id="globalSearch" class="form-control" placeholder="Cari seluruh laporan…">
    </div>

    <div class="row g-4">

      <!-- CARD 1: MENUNGGU -->
      <div class="col-lg-4" data-aos="fade-up">
        <div class="card shadow-sm p-3 h-100">
          <h5 class="text-danger mb-3">Menunggu</h5>
          <div class="table-responsive" style="max-height:200px; overflow-y:auto;">
            <table class="table table-bordered table-striped small">
              <thead class="table-primary">
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="searchable">
                <tr>
                  <td>1</td>
                  <td>Switch Ruang Server panas berlebih</td>
                  <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#detailPending1">Detail</button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Access Point Ruang Meeting mati total</td>
                  <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#detailPending2">Detail</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- CARD 2: PROSES -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card shadow-sm p-3 h-100">
          <h5 class="text-warning mb-3">Dalam Proses</h5>
          <div class="table-responsive" style="max-height:200px; overflow-y:auto;">
            <table class="table table-bordered table-striped small">
              <thead class="table-primary">
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="searchable">
                <tr>
                  <td>1</td>
                  <td>Kabel backbone putus — Area A</td>
                  <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#detailProses1">Detail</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- CARD 3: SELESAI -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card shadow-sm p-3 h-100">
          <h5 class="text-success mb-3">Selesai</h5>
          <div class="table-responsive" style="max-height:200px; overflow-y:auto;">
            <table class="table table-bordered table-striped small">
              <thead class="table-primary">
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="searchable">
                <tr>
                  <td>1</td>
                  <td>Access Point Lantai 2 tidak aktif</td>
                  <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#detailSelesai1">Detail</button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Perbaikan konfigurasi VLAN area B</td>
                  <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#detailSelesai2">Detail</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ========================= -->
<!--         MODALS           -->
<!-- ========================= -->

<!-- MENUNGGU -->
<div class="modal fade" id="detailPending1" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header"><h5>Detail Laporan</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body">
        <p><strong>Judul:</strong> Switch Ruang Server panas berlebih</p>
        <p><strong>Status:</strong> Pending</p>
        <p><strong>Deskripsi:</strong> Switch mengalami overheating, diduga airflow buruk dan debu menumpuk.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="detailPending2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header"><h5>Detail Laporan</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body">
        <p><strong>Judul:</strong> Access Point Ruang Meeting mati total</p>
        <p><strong>Status:</strong> Pending</p>
        <p><strong>Deskripsi:</strong> Perangkat tidak merespons, kemungkinan adaptor rusak.</p>
      </div>
    </div>
  </div>
</div>

<!-- PROSES -->
<div class="modal fade" id="detailProses1" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header"><h5>Detail Laporan</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body">
        <p><strong>Judul:</strong> Kabel backbone putus — Area A</p>
        <p><strong>Status:</strong> Dalam Proses</p>
        <p><strong>Deskripsi:</strong> Kabel putus akibat galian proyek. Tim sedang melakukan tracing jalur dan penggantian kabel.</p>
      </div>
    </div>
  </div>
</div>

<!-- SELESAI -->
<div class="modal fade" id="detailSelesai1" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header"><h5>Detail Laporan</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body">
        <p><strong>Judul:</strong> Access Point Lantai 2 tidak aktif</p>
        <p><strong>Status:</strong> Selesai</p>
        <p><strong>Deskripsi:</strong> AP berhasil direstart dan konfigurasi SSID diperbaiki.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="detailSelesai2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header"><h5>Detail Laporan</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body">
        <p><strong>Judul:</strong> Perbaikan konfigurasi VLAN area B</p>
        <p><strong>Status:</strong> Selesai</p>
        <p><strong>Deskripsi:</strong> VLAN diperbaiki dan trafic routing sudah kembali normal.</p>
      </div>
    </div>
  </div>
</div>

<!-- SEARCH GLOBAL WITH DEBOUNCE -->
<script>
  function debounce(fn, delay = 250) {
    let timer;
    return function () {
      clearTimeout(timer);
      timer = setTimeout(() => fn.apply(this, arguments), delay);
    };
  }

  const globalInput = document.querySelector('#globalSearch');

  globalInput.addEventListener('input', debounce(() => {
    const keyword = globalInput.value.toLowerCase();

    document.querySelectorAll('tbody.searchable tr').forEach(row => {
      const text = row.innerText.toLowerCase();
      row.style.display = text.includes(keyword) ? '' : 'none';
    });

  }, 200));
</script>
