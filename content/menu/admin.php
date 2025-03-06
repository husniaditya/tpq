
<nav class="navbar navbar-expand-xl py-0">
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvas_Navbar">
        <div class="offcanvas-header">
            <div class="d-flex">
                <a href="index.html" class="brand-icon me-2">
                    <svg height="26" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <img src="assets/images/logo/logo.png" alt="Logo TPQ NURUL QALBI" class="me-2" style="height: 50px;">
                    </svg>
                </a>
                <span class="fs-5">TPQ <br> NURUL QALBI</span>
            </div>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-column custom_scroll ps-4 ps-xl-0">
            <!-- start: Dashboard -->
            <h6 class="fl-title title-font ps-2 small text-uppercase text-muted" style="--text-color: var(--theme-color1)">Menu Utama</h6>
            <ul class="list-unstyled mb-4 menu-list">
                <li>
                    <a href="dashboard.php" aria-label="My Dashboard">
                        <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                            <path d="M10 12h4v4h-4z"></path>
                        </svg>
                        <span class="mx-2">Dashboard</span>
                    </a>
                </li>
                
            </ul>
            <!-- start: Master -->
            <h6 class="fl-title title-font ps-2 small text-uppercase text-muted" style="--text-color: var(--theme-color2)">Master</h6>
            <ul class="list-unstyled mb-4 menu-list">
                <li>
                    <a href="pengguna.php" aria-label="Master Pengguna">
                        <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                        </svg>
                        <span class="mx-2">Pengguna</span>
                    </a>
                </li>
                <li>
                    <a href="tingkatan.php" aria-label="Master Pendidikan">
                        <span class="mx-2"><i class="fa  fa-bar-chart-o"></i> Pendidikan</span>
                    </a>
                </li>
            </ul>
            <!-- start: Transaksi -->
            <h6 class="fl-title title-font ps-2 small text-uppercase text-muted" style="--text-color: var(--theme-color3)">Transaksi</h6>
            <ul class="list-unstyled mb-4 menu-list">
                <li>
                    <a href="pendaftaran.php" aria-label="Toast editor">
                        <span class="mx-2"><i class="fa fa-group"></i> Daftar Santri</span>
                    </a>
                </li>
                <li>
                    <a href="iuran.php" aria-label="Toast editor">
                        <span class="mx-2"><i class="fa fa-briefcase"></i> Iuran</span>
                    </a>
                </li>
            </ul>
            <!-- start: Laporan -->
            <h6 class="fl-title title-font ps-2 small text-uppercase text-muted" style="--text-color: var(--theme-color4)">Laporan</h6>
            <ul class="list-unstyled mb-4 menu-list">
                <li>
                    <a href="laporansantri.php" aria-label="documentation">
                        <span class="mx-2"><i class="fa fa-file-excel-o"></i> Laporan Santri</span>
                    </a>
                </li>
                <li>
                    <a href="laporaniuran.php" aria-label="documentation">
                        <span class="mx-2"><i class="fa fa-file-excel-o"></i> Laporan Iuran</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
