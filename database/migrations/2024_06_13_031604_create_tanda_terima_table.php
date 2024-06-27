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
            $table->string('no_ttu');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('lokasi_unit');
            $table->string('merk');
            $table->string('model');
            $table->string('nomor_seri');
            $table->string('jenis_perbaikan');
            $table->string('kelengkapan');
            $table->string('keluhan');
            $table->integer('is_cetak_ttu')->nullable(true);
            $table->dateTime('tanggal_cetak')->nullable(true);
            $table->string('created_by');
            $table->timestamps();

            $table->foreign('lokasi_unit')->references('id')->on('units');
            $table->foreign('id_pelanggan')->references('id')->on('customers');
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
