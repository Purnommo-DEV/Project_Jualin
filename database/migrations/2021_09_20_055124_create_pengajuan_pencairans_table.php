<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanPencairansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_pencairans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_umkm');
            $table->string('tanggal_pengajuan');
            $table->integer('total_penjualan');
            $table->integer('total_ppencairan');
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
        Schema::dropIfExists('pengajuan_pencairans');
    }
}
