<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Absensi Berhasil</title>
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="text-center p-5 bg-success bg-opacity-25">

  <div class="card mx-auto shadow p-4" style="max-width: 400px;">
    <h3 class="text-success mb-3"> Absensi Berhasil</h3>
    <p>Peserta <b>{{ $peserta->nama_lengkap }}</b> telah tercatat hadir.</p>
    <p><small>Waktu: {{ $peserta->waktu_hadir->format('d M Y H:i:s') }}</small></p>
  </div>

</body>
</html>


