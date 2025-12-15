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
        <h2>Pendaftaran peserta</h2>
        <p>{{ $kegiatan->nama_kegiatan }}</p>
      </div>

      <form action="{{ route('peserta.store', $kegiatan->id) }}" method="POST" class="php-email-form">
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <label class="form-label">NIK</label>
            <input type="text" name="data_nik" class="form-control @error('data_nik') is-invalid @enderror"
              value="{{ old('data_nik', '3578') }}"
             required
             oninput="
                this.value = this.value.replace(/[^0-9]/g, '');
                if (!this.value.startsWith('3578')) {
                  this.value = '3578' + this.value.slice(4);
                }
                this.value = this.value.slice(0, 16);
              "
              onkeydown="
              let c = this.selectionStart;
              if (c <= 4 && (event.key == 'Backspace' || event.key === 'Delete')) {
                event.preventDefault();
              }
            "
            onblur="
                if(this.value.length !== 16) {
                  Swal.fire({
                    icon: 'warning',
                    title: 'peringatan NIK',
                    text: 'NIK harus 16 digit lengkap. Silahkan periksa kembali.',
                    confrimButtonText: 'OK'
                  });
                }
              "
             >
        @error('data_nik')<div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <label class="form-label">No_kk</label>
            <input type="text" name="No_kk" class="form-control @error('No_kk') is-invalid @enderror"
            required
            value="{{ old('No_kk') }}"
            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16);"
            >
            @error('No_kk') <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group mt-3">
          <label class="form-label">Nama_Lengkap</label>
          <input type="text" name="data_nama_lengkap" class="form-control @error('data_nama_lengkap') is-invalid @enderror" 
          value="{{ old('data_nama_lengkap') }}"
          required>
          @error('data_nama_lengkap') <div class="text-danger small mt-1">{{ $message }}</div>
         @enderror
        </div>
        <div class="form-group mt-3">
         <label class="form-label">Alamat</label>
          <textarea name="data_alamat" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group mt-3">
          <label class="form-label">No_Telpon</label>
          <input type="text" name="data_no_telp" class="form-control" 
          required
          oninput=" this.value = this.value.replace(/[^0-9]/g, '').slice(0,15);"
          >
        </div>
        <div class="form-group mt-3">
          <label class="form-label">Kecamatan</label>
          <input type="text" name="data_kecamatan" class="form-control" required>
        </div>
        <div class="form-group mt-3">
        <label class="form-label">kelurahan</label>
          <input type="text" name="data_kelurahan" class="form-control" required>
        </div>
        <div class="form-group mt-3">
          <select name="subKegiatan_id" class="form-control">
            <option value="">-- Pilih Sub Kegiatan --</option>
            @foreach($subKegiatan as $sub)
              <option value="{{ $sub->id }}">{{ $sub->nama_subKegiatan }}</option>
            @endforeach
          </select>
        </div>
        <div class="text-center mt-4"><button type="submit" class="btn btn-primary">Daftar</button></div>
       

        
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
            <p>© <span>Copyright</span> <strong class="sitename">SiPemuda</strong> <span>All Rights Reserved</span></p>
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
