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
            $table->integer('id_tanda_terima');
            $table->integer('id_pelanggan');
            $table->integer('id_barang');
            $table->datetime('checked_at');
            $table->datetime('done_at');
            $table->datetime('deliver_at');
            $table->datetime('akhir_garansi');
            $table->datetime('perbaikan');
            $table->integer('biaya_perbaikan');
            $table->integer('biaya_tarnsport');
            $table->string('resi');
            $table->string('status');
            $table->string('keterangan');
            $table->timestamps();
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
