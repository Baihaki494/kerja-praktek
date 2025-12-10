<?php

namespace App\Exports;

use App\Models\Peserta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PesertaExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Peserta::with(['kegiatan', 'subKegiatan'])
            ->get()
            ->map(function ($peserta) {
                return [
                    'id' => $peserta->id,
                    'nama_kegiatan' => $peserta->kegiatan ? $peserta->kegiatan->nama_kegiatan : '-',
                    'nama_sub_kegiatan' => $peserta->subKegiatan ? $peserta->subKegiatan->nama_subKegiatan : '-', //  pakai nama_sub_kegiatan
                    'nik' => $peserta->nik,
                    'no_kk' => $peserta->no_kk,
                    'nama_lengkap' => $peserta->nama_lengkap,
                    'alamat' => $peserta->alamat,
                    'no_telepon' => $peserta->no_telp,
                    'kecamatan' => $peserta->kecamatan,
                    'kelurahan' => $peserta->kelurahan,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Kegiatan',
            'Nama Sub Kegiatan',
            'NIK',
            'No KK',
            'Nama Lengkap',
            'Alamat',
            'No Telepon',
            'Kecamatan',
            'Kelurahan',
        ];
    }
}
