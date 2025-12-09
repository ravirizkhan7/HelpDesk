<!-- Data User Section -->
<section id="data-user" class="services section light-background">

    <!-- Title -->
    <div class="container section-title mt-3" data-aos="fade-up">&nbsp;
        <h2>Data User</h2>
        <p>Daftar user berdasarkan peran di Dinas Komunikasi dan Informatika Kota Pariaman</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- ROW 1 = 3 CARD -->
        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3 text-center">Admin / Kadis</h5>

                        <!-- Search -->
                        <input type="text" class="form-control mb-2" placeholder="Cari Admin/Kadis..." id="searchAdmin">

                        <div style="max-height: 200px; overflow-y: auto;">
                            <table id="tableAdmin" class="table table-bordered table-striped small">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Budi Santoso</td>
                                        <td>Kadis</td>
                                        <td>budi@kominfo.go.id</td>
                                    </tr>
                                    <tr>
                                        <td>Anwar</td>
                                        <td>Admin</td>
                                        <td>anwar@kominfo.go.id</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3 text-center">Kabid</h5>

                        <input type="text" class="form-control mb-2" placeholder="Cari Kabid..." id="searchKabid">

                        <div style="max-height: 200px; overflow-y: auto;">
                            <table id="tableKabid" class="table table-bordered table-striped small">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Bidang</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Siti Rahma</td>
                                        <td>IKP</td>
                                        <td>siti@kominfo.go.id</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3 text-center">Penanggung Jawab (PJ)</h5>

                        <input type="text" class="form-control mb-2" placeholder="Cari PJ..." id="searchPJ">

                        <div style="max-height: 200px; overflow-y: auto;">
                            <table id="tablePJ" class="table table-bordered table-striped small">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tugas</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Deni Putra</td>
                                        <td>Infrastruktur</td>
                                        <td>deni@kominfo.go.id</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- END ROW 1 -->

        <!-- ROW 2 = 2 CARD -->
        <div class="row g-4 justify-content-center mt-1">

            <!-- Card 4 -->
            <div class="col-lg-5 col-md-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3 text-center">Teknisi</h5>

                        <input type="text" class="form-control mb-2" placeholder="Cari Teknisi..." id="searchTeknisi">

                        <div style="max-height: 200px; overflow-y: auto;">
                            <table id="tableTeknisi" class="table table-bordered table-striped small">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Keahlian</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Rizky</td>
                                        <td>Network Engineer</td>
                                        <td>rizky@kominfo.go.id</td>
                                    </tr>
                                    <tr>
                                        <td>Ahmad</td>
                                        <td>Server Admin</td>
                                        <td>ahmad@kominfo.go.id</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-5 col-md-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3 text-center">User</h5>

                        <input type="text" class="form-control mb-2" placeholder="Cari User..." id="searchUser">

                        <div style="max-height: 200px; overflow-y: auto;">
                            <table id="tableUser" class="table table-bordered table-striped small">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Instansi</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ravi</td>
                                        <td>Diskominfo</td>
                                        <td>ravi@kominfo.go.id</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- END ROW 2 -->

    </div>

</section>

<!-- SCRIPT SEARCHING + DEBOUNCE -->
<script>
    function debounce(fn, delay = 300) {
        let timer;
        return (...args) => {
            clearTimeout(timer);
            timer = setTimeout(() => fn.apply(null, args), delay);
        };
    }

    function applySearch(tableId, inputId) {
        const table = document.getElementById(tableId);
        const input = document.getElementById(inputId);

        if (!table || !input) return;

        const rows = table.querySelectorAll("tbody tr");

        const run = debounce(() => {
            const q = input.value.toLowerCase();

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(q) ? "" : "none";
            });
        }, 300);

        input.addEventListener("input", run);
    }

    applySearch("tableAdmin", "searchAdmin");
    applySearch("tableKabid", "searchKabid");
    applySearch("tablePJ", "searchPJ");
    applySearch("tableTeknisi", "searchTeknisi");
    applySearch("tableUser", "searchUser");
</script>
