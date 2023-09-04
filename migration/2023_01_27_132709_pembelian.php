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
        Schema::create('transaksi', function(Blueprint $table){
            $table->id('invoice');
            $table->dateTime('tanggal');
            $table->integer('total_harga');
            $table->foreignId('produk');
            $table->foreign('produk')->references('produk')->on('pemesanan')->onDelete('cascade')->onUpdate('cascade');
            $table->tinyInteger('jumlah_produk');
            $table->integer('harga_per_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
