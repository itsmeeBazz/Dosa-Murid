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
        Schema::create('aksis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_aksi')->unique();
            $table->string('nis_siswa');
            $table->foreign('nis_siswa')->references('nis')->on('siswas')->onDelete('cascade');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('kode_bk');
            $table->foreign('kode_bk')->references('kode_bk')->on('guru_b_k_s')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aksis');
    }
};
