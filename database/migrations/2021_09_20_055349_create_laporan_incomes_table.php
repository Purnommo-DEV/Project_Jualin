<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_incomes', function (Blueprint $table) {
            $table->id();
            $table->integer('laba_kotor');
            $table->integer('laba_operasi');
            $table->integer('laba_sebelum_pajak');
            $table->integer('laba_operasis');
            $table->integer('laba_operasi_berjalan');
            $table->integer('laba_bersih');
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
        Schema::dropIfExists('laporan_incomes');
    }
}
