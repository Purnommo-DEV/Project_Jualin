<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('penjual');
            $table->string('kuantitas');
            $table->integer('total_pembelian');
            $table->integer('rating');
            $table->string('isi_review');
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
        Schema::dropIfExists('review_produks');
    }
}
