<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKegiatan extends Model
{
    use HasFactory;

    protected $table = 'subKegiatan';

    protected $fillable = [
        'kegiatan_id',
        'kode_subKegiatan',
        'nama_subKegiatan',
        'tanggal_mulai_sub',
        'tanggal_selesai_sub',
        'jam_mulai_sub',
        'jam_selesai_sub',
        'lokasi_sub',
        'deskripsi_sub',
    ];

    protected $casts = [
        'tanggal_mulai_sub' => 'date',
        'tanggal_selesai_sub' => 'date',
    ];

    // 🔹 Relasi ke Kegiatan
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
    }

    

    // 🔹 accessor untuk jam mulai & selesai
    public function getJamMulaiSubAttribute($value)
    {
        return $value ? date('H:i', strtotime($value)) : null;
    }

    public function getJamSelesaiSubAttribute($value)
    {
        return $value ? date('H:i', strtotime($value)) : null;
    }

    // Tambahkan di dalam class SubKegiatan
    public function peserta()
    {
        return $this->hasMany(Peserta::class, 'subKegiatan_id', 'id');
    }

}
