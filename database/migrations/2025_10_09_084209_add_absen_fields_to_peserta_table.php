<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('peserta', function (Blueprint $table) {
        $table->boolean('hadir')->default(false);
        $table->timestamp('waktu_hadir')->nullable();
    });
}

public function down()
{
    Schema::table('peserta', function (Blueprint $table) {
        $table->dropColumn(['hadir', 'waktu_hadir']);
    });
}

};
