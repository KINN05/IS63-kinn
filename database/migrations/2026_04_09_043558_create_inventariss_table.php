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
        Schema::create('inventariss', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string( 'nama_brang');
            $table->string( 'jenis_barang');
            $table->integer( 'jumlah');
            $table->string( 'kondisi');
            $table->string( 'harga');
            $table->date( 'tanggal_beli');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventariss');
    }
};
