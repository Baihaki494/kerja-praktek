<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use App\Models\Peserta;
use App\Models\Admin;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            return redirect()->intended(route('admin.index'));
        }

        return back()->withErrors([
            'username' => 'These credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function index()
    {
        $total_kegiatan = Kegiatan::count();
        $total_peserta = Peserta::count();
        $kegiatan_aktif = Kegiatan::where('status_kegiatan', 1)->count();


        // Tambahan untuk absensi
        $total_hadir = Peserta::where('hadir', true)->count();
        $total_belum_hadir = Peserta::where('hadir', false)->count();

         $persentase_hadir = $total_peserta > 0 ? round(($total_hadir / $total_peserta) * 100, 2) : 0;

        return view('admin-index', compact(
            'total_kegiatan',
            'total_peserta',
            'kegiatan_aktif',
            'total_hadir',
            'total_belum_hadir',
            'persentase_hadir'
        ));
    }

    // 👉 Tambahan untuk Register
    public function showRegisterForm()
    {
        return view('admin-register');
    }

    public function register(Request $request)
{
    $request->validate([
        'username' => 'required|unique:admins,username',
        'email'    => 'required|email|unique:admins,email',
        'password' => 'required|min:6|confirmed', // gunakan password_confirmation
    ]);

    $admin = Admin::create([
        'username' => $request->username,
        'email'    => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // otomatis login setelah register
    Auth::guard('admin')->login($admin);

    return redirect()->route('admin.index');
}

}
