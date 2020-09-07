<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Identificador de Docente');
            $table->string('nombre')->comment('Nombre de Docente');
            $table->string('appat')->comment('Apellido Paterno de Docente');
            $table->string('apmat')->nullable()->default(null)->comment('Apllido Materno de Docente');
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
        Schema::dropIfExists('docentes');
    }
}
