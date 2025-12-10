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
        Schema::create('peserta', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('kegiatan_id');       // FK ke kegiatan.id
    $table->unsignedBigInteger('subKegiatan_id')->nullable(); // FK ke sub_kegiatan.id
    $table->string('nik');
    $table->string('no_kk');
    $table->string('nama_lengkap');
    $table->string('alamat');
    $table->string('no_telp');
    $table->string('kecamatan');
    $table->string('kelurahan');
    $table->string('qr_code')->nullable();
    $table->timestamps();

    $table->foreign('kegiatan_id')->references('id')->on('kegiatan')->onDelete('cascade');
    $table->foreign('subKegiatan_id')->references('id')->on('subKegiatan')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta');
    }
};
