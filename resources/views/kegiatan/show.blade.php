<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SiPemuda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">

    <!-- Leafletjs -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <style>
    /* Tombol oranye seperti tombol scroll-up */
    .btn-orange {
        background-color: #ffa366 !important;
        border-color: #ffa366 !important;
        color: #fff !important;
        border-radius: 6px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-orange:hover {
        background-color: #ff944d !important;
        border-color: #ff944d !important;
    }
</style>


</head>

<body class="blog-details-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">SiPemuda</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Beranda</a></li>
          <li><a href="/kegiatan">Kegiatan</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a href="index.html#about"></a>

    </div>
  </header>

<main class="main">

<style>
/* Kurangi jarak kosong di bawah judul */
.page-title {
    padding-top: 80px !important; /* sebelumnya 120px */
    padding-bottom: 10px !important;
}

/* Atur jarak teks deskripsi agar lebih dekat dengan judul */
.page-title .heading p {
    margin-top: 5px !important;
    margin-bottom: 10px !important;
}

/* Kurangi gap antara section atas dan Deskripsi */
#blog-details {
    margin-top: -20px !important;
}
</style>


    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>{{ $kegiatan->nama_kegiatan }}</h1>
                        <p class="mb-0">
                            Detail kegiatan <b>{{ $kegiatan->nama_kegiatan }}</b> dirancang untuk memberikan informasi mendetail
                            seperti jadwal, lokasi, deskripsi, dan sub kegiatan terkait.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto">

                <!-- Blog Details Section -->
                <div id="blog-details" class="blog-details section">
                    <div class="container">

                        <article class="article">
                            
                            <h2 class="title text-left" id="content">Deskripsi</h2>
                            <p class="post-category">{{$kegiatan->deskripsi_kegiatan}}</p>
                            
                            <h2 class="title text-left" id="content">Lokasi</h2>
                            <p class="post-category">{{ $kegiatan->lokasi_kegiatan }}</p>

                            <!-- Sub Kegiatan dengan Dropdown + Button -->
                            <h2 class="title text-left" id="subKegiatan">Sub Kegiatan</h2>

                            {{--  ALERT NOTIFIKASI KUOTA ATAU BERHASIL --}}
                            @if (session('error'))
                                <div class="alert alert-danger mt-3">
                                    <i class="bi bi-exclamation-triangle-fill"></i>
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success mt-3">
                                    <i class="bi bi-check-circle-fill"></i>
                                    {{ session('success') }}
                                </div>
                            @endif
                            {{--  END ALERT --}}

                            <form action="{{ route('peserta.create', $kegiatan->id) }}" method="GET">
                                @csrf
                                <div class="mb-3">
                                    <label for="subKegiatan" class="form-label"><b>Pilih Sub Kegiatan:</b></label>
                                    <select name="subKegiatan_id" id="subKegiatan" class="form-select" required>
                                        <option value="">-- Pilih Sub Kegiatan --</option>
                                        @foreach($kegiatan->subKegiatan as $sub)
                                            <option value="{{ $sub->id }}">
                                                {{ $sub->nama_subKegiatan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-orange mt-2">
                                    <i class="bi bi-person-plus"></i> Daftar Peserta
                                </button>


                            <!-- End Sub Kegiatan -->

                        </article>

                    </div>
                </div><!-- /Blog Details Section -->

            </div>
        </div>
    </div>

</main>

<footer id="footer" class="footer position-relative">
        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="sitename">SiPemuda</strong> <span>All Rights Reserved</span></p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

    

</body>
</html>
