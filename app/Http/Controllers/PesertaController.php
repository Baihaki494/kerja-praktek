<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Kegiatan;
use App\Models\SubKegiatan;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PesertaController extends Controller
{
    // tampilkan form daftar
    public function create($id)
    {
        $kegiatan = Kegiatan::with('subKegiatan')->findOrFail($id);
        $subKegiatan = $kegiatan->subKegiatan; // kirim daftar sub kegiatan
        return view('peserta.create', compact('kegiatan', 'subKegiatan'));
    }

    // simpan data pendaftaran
    public function store(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $validated = $request->validate([
            'data_nik'           => ['required', 'digits:16', 'regex:/^3578[0-9]{12}$/'],
            'No_kk'         => ['required', 'digits:16', 'numeric'], 
            'data_nama_lengkap'  => 'required',
            'data_alamat'        => 'required',
            'data_no_telp'       => 'required',
            'data_kecamatan'  => 'required',
            'data_kelurahan'  => 'required',
            'subKegiatan_id' => 'nullable|exists:subKegiatan,id',
        ]);

        //  Cek apakah kuota sudah penuh
    $jumlahPeserta = $kegiatan->peserta()->count();
    if ($jumlahPeserta >= $kegiatan->limit_kuota_kegiatan) {
        return redirect()
            ->back()
            ->with('error', 'Kuota pendaftaran sudah penuh, pendaftaran ditutup.');
    }

        

        $peserta = Peserta::create([
            'user_id'         => auth()->id(),
            'kegiatan_id'     => $kegiatan->id,
            'subKegiatan_id' => $validated['subKegiatan_id'] ?? null,
            'nik'             => $validated['data_nik'],
            'no_kk'           => $validated['No_kk'],
            'nama_lengkap'    => $validated['data_nama_lengkap'],
            'alamat'          => $validated['data_alamat'],
            'no_telp'         => $validated['data_no_telp'],
            'kecamatan'    => $validated['data_kecamatan'],
            'kelurahan'    => $validated['data_kelurahan'],
        ]);

        // Hitung jumlah peserta terkini
        $totalPeserta = Peserta::where('kegiatan_id', $kegiatan->id)->count();
        // Update field kuota_kegiatan
        $kegiatan->update(['kuota_kegiatan' => $totalPeserta]);

        return redirect()->route('peserta.success', $peserta->id);
    }

    // halaman sukses
    public function success($id)
    {
        $peserta = Peserta::with(['kegiatan', 'subKegiatan'])->findOrFail($id);
        // $absensiUrl = route('absensi.scan', ['id' => $peserta->id]);


    //      // Gunakan GD backend (tanpa imagick)
    // $qrCode = QrCode::format('png')
    //     ->size(300)
    //     ->errorCorrection('H')
    //     ->generate($absensiUrl);


        
        return view('peserta.success', compact('peserta'));
    }
}
