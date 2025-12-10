<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubKegiatan;
use App\Models\Kegiatan;
use App\Models\Peserta;

class SubKegiatanController extends Controller
{
    // Tampilkan form daftar peserta ke sub kegiatan
    public function create($id)
    {
        $subKegiatan = SubKegiatan::with('kegiatan')->findOrFail($id);
        return view('peserta.daftar', compact('subKegiatan'));
    }

    // Simpan peserta ke database
    public function store(Request $request, $id)
    {
        $subKegiatan = SubKegiatan::with('kegiatan')->findOrFail($id);

        $validated = $request->validate([
            'nik'           => 'required|string|max:255',
            'no_kk'         => 'required|string|max:255',
            'nama_lengkap'  => 'required|string|max:255',
            'alamat'        => 'required|string',
            'no_telp'       => 'required|string|max:255',
            'kecamatan'  => 'required|integer',
            'kelurahan'  => 'required|integer',
        ]);

        Peserta::create([
            'kegiatan_id'      => $subKegiatan->kegiatan_id,
            'subKegiatan_id'  => $subKegiatan->id,
            'nik'              => $validated['nik'],
            'no_kk'            => $validated['no_kk'],
            'nama_lengkap'     => $validated['nama_lengkap'],
            'alamat'           => $validated['alamat'],
            'no_telp'          => $validated['no_telp'],
            'kecamatan'     => $validated['kecamatan'],
            'kelurahan'     => $validated['kelurahan'],
        ]);

        return redirect()->route('subKegiatan.show', $subKegiatan->id)
                         ->with('success', 'Pendaftaran sub kegiatan berhasil!');
    }
}

