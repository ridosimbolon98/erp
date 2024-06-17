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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('email');
            $table->string('url_gmaps');
            $table->string('no_telp');
            $table->string('no_hp');
            $table->unsignedBigInteger('id_unit');
            $table->string('tanggal_registrasi');
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_unit')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
