<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminProdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_prodi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_admin_prodi');
            $table->bigInteger('nis');
            $table->string('email');
            $table->string('prodi');
            $table->string('fakultas');
            $table->timestamps();
            $table->string('status');
            $table->unsignedBigInteger('id_prodi');
            $table->unsignedBigInteger('id_fakultas');
            $table->foreign('id_prodi')->references('id')->on('prodi')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('admin_prodi');
    }
}