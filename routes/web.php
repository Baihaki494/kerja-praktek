<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminKegiatanController;
use App\Http\Controllers\AdminSubKegiatanController;
use App\Http\Controllers\AdminPesertaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SubKegiatanController;
use App\Http\Controllers\AbsensiController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/peserta/{id}/download-qr', function ($id) {
    $url = route('absensi.scan', ['id' => $id]);
    $qrImage = QrCode::format('svg')->size(300)->generate($url);
    return response($qrImage)
        ->header('Content-Type', 'image/svg+xml')
        ->header('Content-Disposition', 'attachment; filename="qr_absensi_'.$id.'.svg"');
})->name('peserta.download-qr');
*/

Route::get('/beranda', [AdminController::class, 'index'])->name('beranda');

Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
Route::get('/kegiatan/{id}', [KegiatanController::class, 'show'])->name('kegiatan.show');


Route::get('/kegiatan/{kegiatan}/subKegiatan', [SubKegiatanController::class, 'index'])->name('subKegiatan.index');
Route::middleware('auth')->group(function () {
    Route::get('/subKegiatan/{id}/daftar', [SubKegiatanController::class, 'show'])->name('subKegiatan.show');
    Route::post('/subKegiatan/{id}/daftar', [SubKegiatanController::class, 'store'])->name('subKegiatan.store');
});

Route::get('/peserta/success/{id}', [PesertaController::class, 'success'])
    ->name('peserta.success');


Route::get('/absensi/{id}', [AbsensiController::class, 'scan'])->name('absensi.scan');
Route::get('/absensi/{id}/download', [AbsensiController::class, 'download'])->name('absensi.download');

// Halaman scan QR (untuk panitia/admin absensi)
Route::get('/absensi/scan', [AbsensiController::class, 'index'])->name('absensi.scan');

// Endpoint untuk proses hasil scan QR
Route::post('/absensi/cek', [AbsensiController::class, 'store'])->name('absensi.store');

// Pendaftaran Peserta
Route::get('/kegiatan/{id}/daftar', [PesertaController::class, 'create'])->name('peserta.create');
Route::post('/kegiatan/{id}/daftar', [PesertaController::class, 'store'])->name('peserta.store');

Route::get('peserta/export', [AdminPesertaController::class, 'export'])->name('peserta.export');
Route::post('peserta/import', [AdminPesertaController::class, 'import'])->name('peserta.import');

// Rute User
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Admin
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Register Admin
Route::get('admin/register', [AdminController::class, 'showRegisterForm'])->name('admin.register.form');
Route::post('admin/register', [AdminController::class, 'register'])->name('admin.register.submit');

// Rute Autentikasi User (Peserta)
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Rute untuk halaman admin-index
Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index')->middleware('auth:admin');

// Rute untuk data kegiatan admin
Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
    // Rute untuk halaman admin-index
    Route::get('index', [AdminController::class, 'index'])->name('index');

    // Rute untuk data kegiatan admin
    Route::resource('kegiatan', AdminKegiatanController::class);

    // Rute untuk data sub kegiatan admin
    Route::resource('subKegiatan', AdminSubKegiatanController::class);

    //RUte untuk data peserta admin
    Route::resource('peserta', AdminPesertaController::class)->parameters([
    'peserta' => 'peserta'
    ]);
});
