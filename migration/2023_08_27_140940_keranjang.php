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
        Schema::create('keranjang', function(Blueprint $table){
            $table->id('id_keranjang');
            $table->foreignId('produk');
            $table->foreign('produk')->references('id_produk')->on('produk')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('harga');
            $table->tinyInteger('jumlah_produk');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};
