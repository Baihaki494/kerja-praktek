<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Peserta;

class KegiatanController extends Controller
{
    // Daftar semua kegiatan
    public function index()
    {
        $kegiatan = Kegiatan::with('subKegiatan')->latest()->paginate(10);
        return view('kegiatan.index', compact('kegiatan'));
    }

    // Detail kegiatan + sub kegiatan
    public function show($id)
    {
        $kegiatan = Kegiatan::with('subKegiatan')->findOrFail($id);
        return view('kegiatan.show', compact('kegiatan'));
    }

    // Form pendaftaran peserta
    public function daftar(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $validated = $request->validate([
            'nik' => 'required|digits:16|unique:peserta,nik', 
            'no_kk' => 'required|digits:16',
            'nama_lengkap' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telp' => 'required|string|max:15',
            'kecamatan' => 'required|string|max:50',
            'kelurahan' => 'required|string|max:50',
        ]);

        // Simpan peserta
        Peserta::create([
            'kegiatan_id' => $kegiatan->id,
            'nik' => $validated['nik'],
            'no_kk' => $validated['no_kk'],
            'nama_lengkap' => $validated['nama_lengkap'],
            'alamat' => $validated['alamat'],
            'no_telp' => $validated['no_telp'],
            'kecamatan' => $validated['kecamatan'],
            'kelurahan' => $validated['kelurahan'],
        ]);

        return redirect()->route('kegiatan.index')
                 ->with('success', 'Pendaftaran berhasil! Anda akan diarahkan ke halaman kegiatan.');

    }
}
