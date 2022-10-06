<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->string('email');
            $table->foreignId('prodi_id')->constrained('prodis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('bidangilmu_id')->constrained('bidang_ilmus')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jabatan');
            $table->string('status')->nullable();
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
        // Schema::table('dosens', function (Blueprint $table) {
        //     $table->dropColumn('bidangilmu_id');
        // });
        Schema::dropIfExists('dosens');
    }
}