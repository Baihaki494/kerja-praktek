<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kode_kegiatan')->unique();
            $table->bigInteger('kode_subKegiatan')->nullable();
            $table->string('nama_kegiatan');
            $table->date('tanggal_mulai_kegiatan');
            $table->date('tanggal_selesai_kegiatan');
            $table->string('lokasi_kegiatan');
            $table->time('jam_mulai_kegiatan');
            $table->time('jam_selesai_kegiatan');
            $table->text('deskripsi_kegiatan');
            $table->integer('kuota_kegiatan')->default(0);
            $table->integer('limit_kuota_kegiatan');
            $table->boolean('status_kegiatan')->default(true); // true = aktif, false = tidak aktif
            $table->string('link_full_kegiatan');
            $table->string('link_short_kegiatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};
