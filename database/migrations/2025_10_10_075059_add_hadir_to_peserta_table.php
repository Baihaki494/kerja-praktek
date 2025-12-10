<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('peserta', function (Blueprint $table) {
            if (!Schema::hasColumn('peserta', 'hadir')) {
                $table->boolean('hadir')->default(false)->after('subKegiatan_id');
            }
        });
        
    }

    public function down(): void
    {
        Schema::table('peserta', function (Blueprint $table) {
            $table->dropColumn('hadir');
        });
    }
};
