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
        Schema::create('jadwal_pengiriman', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ttu');
            $table->date('tanggal_pengiriman');
            $table->string('garansi');
            $table->date('tanggal_garansi');
            $table->string('status_pengembalian');
            $table->integer('total_biaya_perbaikan');
            $table->integer('biaya_transport');
            $table->string('pengirim');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('id_ttu')->references('id')->on('tanda_terima');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pengiriman');
    }
};
