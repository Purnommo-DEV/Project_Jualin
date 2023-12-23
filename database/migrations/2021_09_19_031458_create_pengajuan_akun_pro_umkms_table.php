<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanAkunProUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_akun_pro_umkms', function (Blueprint $table) {
            $table->id();
            $table->string('umkm');
            $table->string('mengajukan_tanggal');
            $table->string('diverifikasi_tanggal');
            $table->string('total_pembayaran');
            $table->string('metode_pembayaran');
            $table->string('status_pembayran');
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
        Schema::dropIfExists('pengajuan_akun_pro_umkms');
    }
}
