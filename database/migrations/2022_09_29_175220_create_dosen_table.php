<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->bigInteger('nis');
            $table->string('email');
            $table->string('prodi');
            $table->string('bidang_ilmu');
            $table->string('jabatan');
            $table->timestamps();
            $table->string('status');
            $table->unsignedBigInteger('id_bidang_ilmu');
            $table->unsignedBigInteger('id_prodi');
            $table->foreign('id_bidang_ilmu')->references('id')->on('bidang_ilmu')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_prodi')->references('id')->on('prodi')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen');
    }
}