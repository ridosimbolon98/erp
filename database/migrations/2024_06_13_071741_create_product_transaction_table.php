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
        Schema::create('product_transaction', function (Blueprint $table) {
            $table->id();
            $table->integer('id_produk');
            $table->integer('id_pelanggan');
            $table->integer('qty');
            $table->integer('harga');
            $table->integer('id_admin');
            $table->integer('id_unit');
            $table->timestamps();

            $table->foreign('id_produk')->references('id')->on('products');
            $table->foreign('id_pelanggan')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_transaction');
    }
};
