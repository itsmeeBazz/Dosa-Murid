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
        Schema::create('list_pelanggarans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_aksi');
            $table->foreign('kode_aksi')->references('kode_aksi')->on('aksis')->onDelete('cascade');
            $table->string('kode_pelanggaran');
            $table->foreign('kode_pelanggaran')->references('kode_pelanggaran')->on('pelanggarans')->onDelete('cascade');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_pelanggarans');
    }
};
