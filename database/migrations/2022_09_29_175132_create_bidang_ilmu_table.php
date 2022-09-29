<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidangIlmuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidang_ilmu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bidang_ilmu');
            $table->timestamps();
            $table->string('status');
            $table->unsignedBigInteger('id_prodi');
            $table->foreign('id_prodi')->references('id')->on('prodi')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bidang_ilmu');
    }
}