<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanJumlahProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_jumlah_produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('umkm');
            $table->string('deskripsi_produk');
            $table->integer('total_stock');
            $table->integer('harga_produk');
            $table->string('status_verifikasi');
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
        Schema::dropIfExists('laporan_jumlah_produks');
    }
}
