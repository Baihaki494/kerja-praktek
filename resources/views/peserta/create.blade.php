<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Pendaftaran Peserta</title>
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

  <main id="main" class="mt-5 pt-5">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Pendaftaran Peserta</h2>
        <p>{{ $kegiatan->nama_kegiatan }}</p>
      </div>

      <form action="{{ route('peserta.store', $kegiatan->id) }}" method="POST" class="php-email-form">
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="nik" class="form-control" placeholder="NIK" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="text" name="no_kk" class="form-control" placeholder="No KK" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
        </div>
        <div class="form-group mt-3">
          <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat" required></textarea>
        </div>
        <div class="form-group mt-3">
          <input type="text" name="no_telp" class="form-control" placeholder="No Telepon" required>
        </div>
        <div class="form-group mt-3">
          <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" required>
        </div>
        <div class="form-group mt-3">
          <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan" required>
        </div>
        <div class="form-group mt-3">
          <select name="subKegiatan_id" class="form-control">
            <option value="">-- Pilih Sub Kegiatan --</option>
            @foreach($subKegiatan as $sub)
              <option value="{{ $sub->id }}">{{ $sub->nama_subKegiatan }}</option>
            @endforeach
          </select>
        </div>
        <div class="text-center mt-4"><button type="submit" class="btn btn-primary">Daftar</button></div>''
       

        
      </form>
    </div>
  </main>

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

  <footer id="footer" class="footer position-relative">
        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="sitename">BLA.</strong> <span>All Rights Reserved</span></p>
        </div>
    </footer>

    <!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if (session('error'))
    Swal.fire({
        icon: 'error',
        title: 'Maaf',
        text: '{{ session('error') }}',
        confirmButtonColor: '#d33',
        confirmButtonText: 'Tutup'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "{{ url('/kegiatan') }}"; // arahkan ke halaman kegiatan
        }
    });
@endif


    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Oke'
        });
    @endif
</script>


   
</body>
</html>
