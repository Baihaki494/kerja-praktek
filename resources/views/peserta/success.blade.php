<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pendaftaran Sukses</title>

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
  <main id="main" class="mt-5 pt-5">
    <div class="container" data-aos="fade-up">
      <div class="alert alert-success text-center shadow-lg p-4 rounded-3">
        <h4 class="alert-heading"> Pendaftaran Berhasil!</h4>
        <p>Terima kasih <b>{{ $peserta->nama_lengkap }}</b> sudah mendaftar pada kegiatan 
           <b>{{ $peserta->kegiatan->nama_kegiatan }}</b>.</p>

        @if($peserta->subKegiatan)
          <p>Sub Kegiatan: <b>{{ $peserta->subKegiatan->nama_subKegiatan }}</b></p>
        @endif

        <hr>

        {{-- === QR Code Absensi ===
        @php
            use SimpleSoftwareIO\QrCode\Facades\QrCode;
            $absensiUrl = route('absensi.scan', $peserta->id);
        @endphp

        <div class="text-center mt-4">
          <h5 class="mb-3">QR Code Absensi Anda</h5>
          <div class="d-flex justify-content-center">
            {!! QrCode::size(180)->generate($absensiUrl) !!}
          </div>
          <small class="text-muted d-block mt-2">Gunakan QR ini untuk absensi saat hadir di kegiatan</small>

          <div class="mt-3">
            <a href="{{ route('absensi.download', ['id' => $peserta->id]) }}" class="btn btn-primary">
              <i class="bi bi-download"></i> Unduh QR Code
            </a>
          </div>
        </div> --}}

        <hr class="my-4">

        <p class="mb-2">Anda akan diarahkan ke halaman kegiatan dalam <span id="countdown">15</span> detik...</p>
        <a href="{{ route('kegiatan') }}" class="btn btn-success mt-2">Kembali ke Daftar Kegiatan Sekarang</a>
      </div>
    </div>
  </main>

  <footer id="footer">
    <div class="container py-4 text-center">
      &copy; 2025 <strong><span>SiPemuda</span></strong>. All Rights Reserved
    </div>
  </footer>

  <!-- Vendor JS -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <!-- Redirect otomatis -->
  <script>
    let countdown = 15;
    const timer = setInterval(() => {
      countdown--;
      document.getElementById('countdown').innerText = countdown;
      if (countdown <= 0) {
        clearInterval(timer);
        window.location.href = "{{ route('kegiatan') }}";
      }
    }, 1000);
  </script>

  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
      Swal.fire({
          icon: 'success',
          title: 'Pendaftaran Berhasil!',
          text: 'Terima kasih telah mendaftar.',
          showCancelButton: true,
          confirmButtonText: 'Oke',
          cancelButtonText: 'Unduh QR Code',
          reverseButtons: true,
          customClass: {
              confirmButton: 'btn btn-success mx-2',
              cancelButton: 'btn btn-primary mx-2'
          },
          buttonsStyling: false
      }).then((result) => {
          if (result.dismiss === Swal.DismissReason.cancel) {
              window.location.href = "{{ route('absensi.download', ['id' => $peserta->id]) }}";
          }
      });
  });
  </script>
</body>
</html>
