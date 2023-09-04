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
        Schema::create('pemesanan_via_keranjang', function(Blueprint $table){
            $table->id('id_pemesanan');
            $table->foreignId('produk_keranjang');
            $table->foreign('produk_keranjang')->references('id_keranjang')->on('keranjang')->onDelete('cascade')->onUpdate('cascade');
            $table->tinyInteger('jumlah_produk');
            $table->dateTime('tanggal');
            $table->string('alamat');
            $table->integer('total_harga');
            $table->integer('harga_per_produk');
            $table->string('metode_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_via_keranjangs');
    }
};
