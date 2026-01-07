<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Daftar Akun - SiPemuda</title>
  <link href="{{ asset('assetss/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetss/css/main.css') }}" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; min-height: 100vh;">
  <div style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 100%; max-width: 450px;">
    <div class="text-center mb-4">
      <h2 style="color: #388da8; font-weight: 700;">REGISTRASI</h2>
      <p class="text-muted">Buat akun baru untuk mendaftar kegiatan</p>
    </div>

    @if($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" value="{{ old('name') }}" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat Email</label>
        <input type="email" name="email" class="form-control" placeholder="email@contoh.com" value="{{ old('email') }}" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Kata Sandi</label>
        <input type="password" name="password" class="form-control" placeholder="Minimal 8 Karakter" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Konfirmasi Kata Sandi</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi Kata Sandi" required>
      </div>
      <button type="submit" class="btn btn-primary w-100" style="background-color: #388da8; border: none; border-radius: 50px; padding: 12px;">Daftar Sekarang</button>
    </form>

    <div class="text-center mt-4">
      <p>Sudah punya akun? <a href="{{ route('login') }}" style="color: #388da8;">Login di sini</a></p>
    </div>
  </div>
</body>
</html>