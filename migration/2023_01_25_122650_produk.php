<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_produk');
            $table->foreignId('merk');
            $table->foreign('merk')->references('id_merk')->on('merk')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('kategori');
            $table->foreign('kategori')->references('id_kategori')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_produk');
            $table->text('deskripsi_produk');
            $table->smallInteger('stok_produk');
            $table->integer('harga_produk');
            $table->string('gambar_produk');
            $table->timestamps(); // Tambahkan kolom timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
