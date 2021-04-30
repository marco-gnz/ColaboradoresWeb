<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin')->nullable();
            $table->integer('sueldo');
            $table->unsignedBigInteger('id_cargo')->unsigned();
            $table->foreign('id_cargo')->references('id')->on('cargos');
            $table->unsignedBigInteger('id_tipo_contrato')->unsigned();
            $table->foreign('id_tipo_contrato')->references('id')->on('tipo_contratos');
            $table->unsignedBigInteger('id_trabajador')->unsigned();
            $table->foreign('id_trabajador')->references('id')->on('trabajadors');
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
        Schema::dropIfExists('contratos');
    }
}
