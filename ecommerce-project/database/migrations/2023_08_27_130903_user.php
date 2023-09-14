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
        Schema::create('user', function (Blueprint $table){
            $table->id('id_user');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('nomor_hp');
            $table->foreignId('riwayat_pembelian');
            $table->foreign('riwayat_pembelian')->references('invoice')->on('transaksi')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
