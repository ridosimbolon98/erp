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
        Schema::create('tanda_terima', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pelanggan');
            $table->integer('id_barang');
            $table->string('jenis_perbaikan');
            $table->string('nomor_seri');
            $table->string('kelengkapan');
            $table->string('keluhan');
            $table->integer('is_cetak_ttu');
            $table->datetime('tanggal_cetak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanda_terima');
    }
};
