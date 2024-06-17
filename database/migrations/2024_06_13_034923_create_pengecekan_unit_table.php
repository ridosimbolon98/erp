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
        Schema::create('pengecekan_unit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ttu');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_barang');
            $table->string('no_seri');
            $table->string('kelengkapan');
            $table->string('keluhan');
            $table->dateTime('checked_at');
            $table->dateTime('done_at');
            $table->dateTime('deliver_at');
            $table->date('akhir_garansi');
            $table->string('perbaikan');
            $table->integer('biaya_perbaikan');
            $table->integer('biaya_tarnsport');
            $table->string('resi');
            $table->string('status');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('id_ttu')->references('id')->on('tanda_terima');
            $table->foreign('id_pelanggan')->references('id')->on('customers');
            $table->foreign('id_barang')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengecekan_unit');
    }
};
