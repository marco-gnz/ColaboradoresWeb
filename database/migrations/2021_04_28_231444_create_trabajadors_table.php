<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->string('rut')->unique();
            $table->string('nombres');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->integer('fono')->nullable();
            $table->string('url_foto_perfil')->nullable();
            $table->string('direccion')->nullable();
            $table->string('mail')->unique();
            $table->string('ciudad');
            $table->unsignedBigInteger('id_estado_trabajador')->unsigned();
            $table->foreign('id_estado_trabajador')->references('id')->on('estado_trabajadors');
            $table->unsignedBigInteger('id_previcion_salud')->unsigned();
            $table->foreign('id_previcion_salud')->references('id')->on('prevision_saluds');
            $table->unsignedBigInteger('id_afp')->unsigned();
            $table->foreign('id_afp')->references('id')->on('afps');
            $table->unsignedBigInteger('id_tipo_pago')->unsigned();
            $table->foreign('id_tipo_pago')->references('id')->on('tipo_pagos');
            $table->unsignedBigInteger('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users');
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
        Schema::dropIfExists('trabajadors');
    }
}
