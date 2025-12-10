<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    // Nama tabel (opsional kalau mengikuti konvensi Laravel)
    protected $table = 'peserta';

    // Kolom yang boleh diisi massal
    protected $fillable = [
        'kegiatan_id',
        'subKegiatan_id',
        'nik',
        'no_kk',
        'nama_lengkap',
        'alamat',
        'no_telp',
        'kecamatan',
        'kelurahan',
        'hadir',
    ];

    /**
     * Relasi ke tabel kegiatan
     */
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id', 'id');
    }

    /**
     * Relasi ke tabel subKegiatan
     */
    public function subKegiatan()
    {
        return $this->belongsTo(SubKegiatan::class, 'subKegiatan_id', 'id');
    }

    
}
