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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->date('tanggal_produksi');
            $table->unsignedBigInteger('jenis_id')->unsigned();
            $table->integer('stok')->nullable();
            $table->string('deskripsi');
            $table->timestamps();
        });

        Schema::table('barangs', function (Blueprint $table) {
            // $table->unsignedBigInteger('jenis_id');
            $table->foreign('jenis_id')->references('id')->on('jenis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
