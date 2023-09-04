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
        Schema::create('penilaian', function(Blueprint $table){
            $table->id('id_penilaian');
            $table->foreignId('user');
            $table->foreign('user')->references('id_user')->on('user')->onDelete('cascade')->onUpdate('cascade');
            $table->text('penilaian');
            $table->string('bintang');
            $table->string('gambar_penilaian');
            $table->date('tanggal_penilaian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
