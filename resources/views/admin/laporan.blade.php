<section id="laporan" class="laporan section light-background">

  <div class="container section-title" data-aos="fade-up">
    <h2>Laporan</h2>
    <p>Riwayat laporan yang telah kamu kirimkan.</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="card shadow-sm p-4">
      <h3 class="mb-3">Histori Laporan</h3>

      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>NO</th>
              <th>Judul</th>
              <th>Status</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1</td>
              <td>Kabel putus area A</td>
              <td><span class="badge bg-warning">Proses</span></td>
              <td>03-12-2025</td>
              <td>
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal1">Detail</button>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td>Access point tidak aktif</td>
              <td><span class="badge bg-success">Selesai</span></td>
              <td>01-12-2025</td>
              <td><button class="btn btn-sm btn-primary">Detail</button></td>
            </tr>

            <tr>
              <td>3</td>
              <td>Switch panas berlebih</td>
              <td><span class="badge bg-danger">Pending</span></td>
              <td>29-11-2025</td>
              <td><button class="btn btn-sm btn-primary">Detail</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- Modal Detail 1 -->
<div class="modal fade" id="detailModal1" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail Laporan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Judul:</strong> Kabel putus area A</p>
        <p><strong>Status:</strong> Proses</p>
        <p><strong>Tanggal:</strong> 03-12-2025</p>
        <p><strong>Deskripsi:</strong> Kabel utama jaringan terputus akibat pengerjaan konstruksi.</p>
      </div>
    </div>
  </div>
</div>
<!-- End Laporan Section -->