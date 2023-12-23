<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimKonsumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claim_konsumens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('no_resi');
            $table->integer('total_harga');
            $table->string('kuantitas');
            $table->string('konsumen');
            $table->string('alamat_pengembalian');
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
        Schema::dropIfExists('claim_konsumens');
    }
}
