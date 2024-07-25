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
        Schema::create('pembelian_sparepart', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pembelian');
            $table->string('nama_sparepart');
            $table->string('toko');
            $table->string('no_telp');
            $table->integer('harga');
            $table->string('bank');
            $table->string('no_rek');
            $table->string('atas_nama');
            $table->unsignedBigInteger('id_ttu');
            $table->unsignedBigInteger('lokasi_unit');
            $table->string('no_resi');
            $table->timestamps();

            $table->foreign('id_ttu')->references('id')->on('tanda_terima');
            $table->foreign('lokasi_unit')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_sparepart');
    }
};
