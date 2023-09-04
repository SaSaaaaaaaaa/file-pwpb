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
        Schema::create('pemesanan', function(Blueprint $table){
            $table->id('id_pemesanan');
            $table->foreignId('produk');
            $table->foreign('produk')->references('id_produk')->on('produk')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pemesanans');
    }
};
