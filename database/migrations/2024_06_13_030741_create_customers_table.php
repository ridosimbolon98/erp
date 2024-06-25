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
            $table->string('email')->nullable();
            $table->string('url_gmaps');
            $table->string('no_telp')->nullable();
            $table->string('no_hp')->nullable();
            $table->unsignedBigInteger('id_unit');
            $table->dateTime('tanggal_registrasi');
            $table->string('status');
            $table->string('updated_by');
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
