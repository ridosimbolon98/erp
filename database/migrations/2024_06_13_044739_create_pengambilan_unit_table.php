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
        Schema::create('pengambilan_unit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ttu');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_barang');
            $table->string('no_seri');
            $table->string('kelengkapan');
            $table->string('keluhan');
            $table->dateTime('done_at');
            $table->string('perbaikan');
            $table->string('garansi');
            $table->date('tanggal_garansi');
            $table->integer('total_biaya');
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
        Schema::dropIfExists('pengambilan_unit');
    }
};
