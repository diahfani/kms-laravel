<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataKuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mata_kuliah');
            $table->integer('sks_teori');
            $table->integer('sks_praktikum');
            $table->timestamps();
            $table->string('status');
            $table->unsignedBigInteger('id_kurikulum');
            $table->foreign('id_kurikulum')->references('id')->on('kurikulum')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_kuliah');
    }
}