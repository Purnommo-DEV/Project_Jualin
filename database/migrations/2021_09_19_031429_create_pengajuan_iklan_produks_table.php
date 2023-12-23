<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanIklanProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_iklan_produks', function (Blueprint $table) {
            $table->id();
            $table->string('umkm');
            $table->string('nama_produk');
            $table->string('deskripsi');
            $table->string('iklan_di_rentan');
            $table->string('total_pembayaran');
            $table->string('status_pembayaran');
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
        Schema::dropIfExists('pengajuan_iklan_produks');
    }
}
