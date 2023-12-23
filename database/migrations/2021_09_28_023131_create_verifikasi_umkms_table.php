<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifikasiUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifikasi_umkms', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email');
            $table->string('jabatan');
            $table->string('kontak_wa');
            $table->string('alamat');
            $table->string('nominal_bayar');
            $table->string('nama_umkm');
            $table->string('syarat_01');
            $table->string('syarat_02');
            $table->string('syarat_03');
            $table->string('syarat_04');
            $table->string('status');
            $table->string('verifikasi_premium');
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
        Schema::dropIfExists('verifikasi_umkms');
    }
}
