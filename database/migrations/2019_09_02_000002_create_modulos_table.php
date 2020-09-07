<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Identificador de Modulo');
            $table->string('nombre')->comment('Nombree de Modulo');
            $table->text('descripcion')->nullable()->default(null)->comment('Descripcion de Modulo');
            $table->timestamp('created_at')->nullable()->comment('Fecha de Creación');
            $table->timestamp('updated_at')->nullable()->comment('Fecha de Actualización');
            $table->unsignedBigInteger('user_id')->comment('Identificador de Usuario');
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulos');
    }
}
