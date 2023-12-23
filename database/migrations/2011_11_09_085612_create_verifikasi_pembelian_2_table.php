<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifikasiPembelian2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifikasi_pembelian_2', function (Blueprint $table) {
            $table->id();
            $table->string('pembeli_id');
            $table->string('kurir');
            $table->string('total_pembayaran');
            $table->string('metode_pembayaran');
            $table->string('alamat');
            $table->string('status_bayar');
            $table->string('status_pembelian');         
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
        Schema::dropIfExists('verifikasi_pembelian_2');
    }
}
