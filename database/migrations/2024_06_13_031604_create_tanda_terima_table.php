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
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_barang');
            $table->string('jenis_perbaikan');
            $table->string('nomor_seri');
            $table->string('kelengkapan');
            $table->string('keluhan');
            $table->integer('is_cetak_ttu');
            $table->dateTime('tanggal_cetak');
            $table->timestamps();

            $table->foreign('id_pelanggan')->references('id')->on('customers');
            $table->foreign('id_barang')->references('id')->on('products');
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
