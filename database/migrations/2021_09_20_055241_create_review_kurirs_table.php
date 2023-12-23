<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewKurirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_kurirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kurir');
            $table->string('penjual');
            $table->string('nama_barang');
            $table->string('pembeli');
            $table->string('plat_motor');
            $table->integer('rating');
            $table->string('review_dari_pembeli');
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
        Schema::dropIfExists('review_kurirs');
    }
}
