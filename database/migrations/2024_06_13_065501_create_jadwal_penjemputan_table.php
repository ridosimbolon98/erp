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
        Schema::create('jadwal_penjemputan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelanggan');
            $table->string('alamat_penjemputan');
            $table->string('url_gmaps');
            $table->string('domisili');
            $table->string('no_telp');
            $table->string('teknisi_penjemput');
            $table->string('tanggal_jadwal');
            $table->timestamps();

            $table->foreign('id_pelanggan')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_penjemputan');
    }
};
