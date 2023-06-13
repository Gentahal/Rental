<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kendaraan')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->date('tgl_sewa');
            $table->date('tgl_kembali');
            $table->string('keterangan')->null();
            $table->enum('status', ['diproses', 'diterima', 'dibalikan', 'selesai'])->default('diproses');
            $table->timestamps();

            $table->foreign('id_kendaraan')->references('id')->on('kendaraan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rental');
    }
}