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
        Schema::create('tabel_produk', function (Blueprint $table) {
            $table->increments('id_produk');
            $table->string('nama_produk');
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_produk');
        // Schema::rename(‘tabel_produk’,	‘produk’);
    }
    
};