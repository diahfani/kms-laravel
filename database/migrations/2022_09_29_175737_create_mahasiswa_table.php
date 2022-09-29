<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa');
            $table->bigInteger('npm');
            $table->string('email');
            $table->string('fakultas');
            $table->integer('tahun_masuk');
            $table->timestamps();
            $table->string('status');
            $table->unsignedBigInteger('id_fakultas');
            $table->foreign('id_fakultas')->references('id')->on('fakultas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}