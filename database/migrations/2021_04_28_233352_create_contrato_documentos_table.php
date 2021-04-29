<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_documentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_tipo_contrato');
            $table->dateTime('fecha_subida');
            $table->string('mime');
            $table->string('url');
            $table->unsignedBigInteger('id_contrato')->unsigned();
            $table->foreign('id_contrato')->references('id')->on('contratos');
            $table->unsignedBigInteger('id_tipo_documento')->unsigned();
            $table->foreign('id_tipo_documento')->references('id')->on('tipo_documentos');
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
        Schema::dropIfExists('contrato_documentos');
    }
}
