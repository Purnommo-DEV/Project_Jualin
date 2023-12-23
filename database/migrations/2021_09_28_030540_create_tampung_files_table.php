<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTampungFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampung_files', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('syarat_01');
            $table->string('syarat_02');
            $table->string('syarat_03');
            $table->string('syarat_04');
            $table->string('no_nib');
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
        Schema::dropIfExists('tampung_files');
    }
}
