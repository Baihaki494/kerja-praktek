<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Sudah Absen</title>
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="text-center p-5 bg-warning bg-opacity-25">

  <div class="card mx-auto shadow p-4" style="max-width: 400px;">
    <h3 class="text-warning mb-3"> Sudah Absen</h3>
    <p>Peserta <b>{{ $peserta->nama_lengkap }}</b> sudah tercatat hadir sebelumnya.</p>
    <p><small>Waktu hadir: {{ $peserta->waktu_hadir->format('d M Y H:i:s') }}</small></p>
  </div>

</body>
</html>
