<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login - SiPemuda</title>
  <link href="{{ asset('assetss/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetss/css/main.css') }}" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; height: 100vh;">
  <div style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 100%; max-width: 400px;">
    <div class="text-center mb-4">
      <h2 style="color: #388da8; font-weight: 700;">LOGIN USER</h2>
      <p class="text-muted">Masuk ke portal SiPemuda</p>
    </div>

    @if($errors->any())
      <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('login') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required autofocus>
      </div>
      <div class="mb-3">
        <label class="form-label">Kata Sandi</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary w-100" style="background-color: #388da8; border: none; border-radius: 50px; padding: 12px;">Masuk</button>
    </form>

    <div class="text-center mt-4">
      <p>Belum punya akun? <a href="{{ route('register') }}" style="color: #388da8;">Daftar Akun</a></p>
    </div>
  </div>
</body>
</html>