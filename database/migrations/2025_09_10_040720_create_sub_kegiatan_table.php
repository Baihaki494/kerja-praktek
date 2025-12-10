<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subKegiatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kegiatan_id'); // relasi ke kegiatan
            $table->string('kode_subKegiatan')->unique();
            $table->string('nama_subKegiatan');
            $table->date('tanggal_mulai_sub')->nullable();
            $table->date('tanggal_selesai_sub')->nullable();
            $table->time('jam_mulai_sub')->nullable();
            $table->time('jam_selesai_sub')->nullable();
            $table->string('lokasi_sub')->nullable();
            $table->text('deskripsi_sub')->nullable();
            $table->timestamps();

            // foreign key
            $table->foreign('kegiatan_id')->references('id')->on('kegiatan')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subKegiatan');
    }
};
