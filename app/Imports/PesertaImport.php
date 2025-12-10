<?php

namespace App\Imports;

use App\Models\Peserta;
use App\Models\Kegiatan;
use App\Models\SubKegiatan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PesertaImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Cari kegiatan dan sub kegiatan berdasarkan nama di Excel
        $kegiatan = Kegiatan::where('nama_kegiatan', $row['nama_kegiatan'] ?? null)->first();
        $subKegiatan = SubKegiatan::where('nama_subKegiatan', $row['nama_sub_kegiatan'] ?? null)->first();

        // Buat peserta baru
        $peserta = new Peserta([
            'kegiatan_id' => $kegiatan ? $kegiatan->id : null,
            'subKegiatan_id' => $subKegiatan ? $subKegiatan->id : null, // ✅ gunakan ID, bukan nama
            'nik' => $row['nik'] ?? null,
            'no_kk' => $row['no_kk'] ?? null,
            'nama_lengkap' => $row['nama_lengkap'] ?? null,
            'alamat' => $row['alamat'] ?? null,
            'no_telp' => $row['no_telepon'] ?? null,
            'kecamatan' => $row['kecamatan'] ?? null,
            'kelurahan' => $row['kelurahan'] ?? null,
        ]);

        $peserta->save();


        // 🔹 Tambah kuota kegiatan otomatis
if ($kegiatan && $kegiatan->kuota_kegiatan < $kegiatan->limit_kuota_kegiatan) {
    $kegiatan->kuota_kegiatan += 1;
    $kegiatan->save();
}

    }
}
