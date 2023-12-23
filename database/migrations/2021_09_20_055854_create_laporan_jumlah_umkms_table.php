<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanJumlahUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_jumlah_umkms', function (Blueprint $table) {
            $table->id();
            $table->string('umkm');
            $table->string('foto_umkm');
            $table->integer('total_produk');
            $table->string('alamat');
            $table->string('surat_izin');
            $table->integer('pendapatan');
            $table->string('status');
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
        Schema::dropIfExists('laporan_jumlah_umkms');
    }
}
