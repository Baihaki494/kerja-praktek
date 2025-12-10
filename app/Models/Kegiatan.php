<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';

    // Menonaktifkan timestamps
    public $timestamps = false;

    protected $fillable = [
        'kode_kegiatan',
        'nama_kegiatan',
        'tanggal_mulai_kegiatan',
        'tanggal_selesai_kegiatan',
        'lokasi_kegiatan',
        'jam_mulai_kegiatan',
        'jam_selesai_kegiatan',
        'deskripsi_kegiatan',
        'kuota_kegiatan',
        'limit_kuota_kegiatan',
        'status_kegiatan',
        'link_full_kegiatan',
        'link_short_kegiatan',
    ];

    protected $casts = [
        'tanggal_mulai_kegiatan' => 'date',
        'tanggal_selesai_kegiatan' => 'date',
        'status_kegiatan' => 'boolean',
    ];

    // 🔹 accessor biar jam otomatis diformat ke H:i
    public function getJamMulaiKegiatanAttribute($value)
    {
        return $value ? date('H:i', strtotime($value)) : null;
    }

    public function getJamSelesaiKegiatanAttribute($value)
    {
        return $value ? date('H:i', strtotime($value)) : null;
    }

    // 🔹 relasi ke SubKegiatan
    public function subKegiatan()
    {
        return $this->hasMany(SubKegiatan::class, 'kegiatan_id');
    }

    public function index()
{
    $kegiatan = Kegiatan::with('subKegiatan')->latest()->paginate(10);
    return view('admin.kegiatan.index', compact('kegiatan'));
}


    // Tambahkan di dalam class Kegiatan
public function peserta()
{
    return $this->hasMany(Peserta::class, 'kegiatan_id', 'id');
}


}

