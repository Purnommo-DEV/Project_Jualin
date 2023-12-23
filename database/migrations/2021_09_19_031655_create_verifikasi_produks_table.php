<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifikasiProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifikasi_produks', function (Blueprint $table) {
            $table->id();
            $table->string('umkm');
            $table->string('nama_produk');
            $table->string('deskripsi_produk');
            $table->integer('total_stok');
            $table->integer('harga_produk');
            $table->string('status_verifikasi');
            $table->string('status_verifikasi_iklan_produk');
            $table->string('foto_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verifikasi_produks');
    }
}
