<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutoModuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituto_modulo', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Identificador de InstitutoModulo');
            $table->timestamp('created_at')->nullable()->comment('Fecha de Creación');
            $table->timestamp('updated_at')->nullable()->comment('Fecha de Actualización');
            $table->unsignedBigInteger('instituto_id')->comment('Identificador de Instituto');
            $table->unsignedBigInteger('modulo_id')->comment('Identificador de Modulo');
            
            $table->foreign('instituto_id')->references('id')->on('institutos')->onDelete('cascade');
            $table->foreign('modulo_id')->references('id')->on('modulos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituto_sede');
    }
}
