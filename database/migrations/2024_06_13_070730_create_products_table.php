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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('id_merk');
            $table->string('model');
            $table->string('nomor_seri');
            $table->integer('ukuran_layar');
            $table->integer('harga');
            $table->integer('stok');
            $table->integer('id_unit');
            $table->string('foto');
            $table->date('tanggal_beli');
            $table->string('supplier');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('id_merk')->references('id')->on('merk');
            $table->foreign('id_unit')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
