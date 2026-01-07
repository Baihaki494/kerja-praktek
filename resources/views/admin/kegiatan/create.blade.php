<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-asset-path="{{ asset('asset/') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Tambah Kegiatan</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="{{ asset('asset/img/favicon/favicon.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('asset/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('asset/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('asset/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/vendor/libs/apex-charts/apex-charts.css') }}" />
    <script src="{{ asset('asset/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('asset/js/config.js') }}"></script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('beranda') }}" class="app-brand-link">
                        <h3 class="mb-4">SiPemuda</h3>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <li class="menu-item {{ request()->routeIs('admin.index') ? 'active open' : '' }}">
                        <a href="{{ route('admin.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Dashboards">Dashboard Admin</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.kegiatan.index') ? 'active open' : '' }}">
                        <a href="{{ route('admin.kegiatan.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-table"></i>
                            <div data-i18n="Tables">Data Kegiatan</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.subKegiatan.index') ? 'active open' : '' }}">
                        <a href="{{ route('admin.subKegiatan.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-table"></i>
                            <div data-i18n="Tables">Data Sub Kegiatan</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.peserta.index') ? 'active open' : '' }}">
                        <a href="{{ route('admin.peserta.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-list-check"></i>
                            <div data-i18n="Experiences">Data Peserta</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li>
                                <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </button>
                                </form>
                        </ul>
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Tambah Kegiatan</h4>

                        <!-- Basic Forms -->
                        <div class="card">
                            <h5 class="card-header">Tambah Kegiatan</h5>
                        
                                <form action="{{ route('admin.kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                                      
                                    
                                    <div class="mb-3">
        <label for="kode_kegiatan" class="form-label">Kode Kegiatan</label>
        <input type="text" class="form-control" id="kode_kegiatan" name="kode_kegiatan" required>
    </div>

    <div class="mb-3">
        <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="tanggal_mulai_kegiatan" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" id="tanggal_mulai_kegiatan" name="tanggal_mulai_kegiatan" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="tanggal_selesai_kegiatan" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" id="tanggal_selesai_kegiatan" name="tanggal_selesai_kegiatan" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="lokasi_kegiatan" class="form-label">Lokasi</label>
        <input type="text" class="form-control" id="lokasi_kegiatan" name="lokasi_kegiatan">
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="jam_mulai_kegiatan" class="form-label">Jam Mulai</label>
            <input type="time" class="form-control" id="jam_mulai_kegiatan" name="jam_mulai_kegiatan" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="jam_selesai_kegiatan" class="form-label">Jam Selesai</label>
            <input type="time" class="form-control" id="jam_selesai_kegiatan" name="jam_selesai_kegiatan" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="deskripsi_kegiatan" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi_kegiatan" name="deskripsi_kegiatan" rows="3"></textarea>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="kuota_kegiatan" class="form-label">Kuota</label>
            <input type="number" class="form-control" id="kuota_kegiatan" name="kuota_kegiatan">
        </div>
        <div class="col-md-6 mb-3">
            <label for="limit_kuota_kegiatan" class="form-label">Limit Kuota</label>
            <input type="number" class="form-control" id="limit_kuota_kegiatan" name="limit_kuota_kegiatan">
        </div>
    </div>

    <div class="mb-3">
        <label for="status_kegiatan" class="form-label">Status</label>
        <select name="status_kegiatan" id="status_kegiatan" class="form-control">
            <option value="1">Aktif</option>
            <option value="0">Tidak Aktif</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="link_full_kegiatan" class="form-label">Link Full</label>
        <input type="url" class="form-control" id="link_full_kegiatan" name="link_full_kegiatan">
    </div>

    <div class="mb-3">
        <label for="link_short_kegiatan" class="form-label">Link Short</label>
        <input type="url" class="form-control" id="link_short_kegiatan" name="link_short_kegiatan">
    </div>

    <div class="mb-3">
    <label for="gambar" class="form-label">Gambar Kegiatan</label>
    <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
    <small class="text-muted">Pilih foto kegiatan langsung dari laptop Anda (Format: jpg, png, webp).</small>
</div>

                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                    <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-secondary">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- / Basic Forms -->
                </div>
                <!-- / Content -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <script src="{{ asset('asset/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('asset/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('asset/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('asset/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>