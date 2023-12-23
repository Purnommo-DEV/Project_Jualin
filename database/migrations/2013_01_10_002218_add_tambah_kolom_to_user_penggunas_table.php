<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTambahKolomToUserPenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_penggunas', function (Blueprint $table) {
            $table->string('tgl_lahir')->after('email');
            $table->string('alamat_rumah')->after('tgl_lahir');
            $table->string('jenis_kelamin')->after('alamat_rumah');
            $table->string('no_ktp')->after('jenis_kelamin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_penggunas', function (Blueprint $table) {
            //
        });
    }
}
