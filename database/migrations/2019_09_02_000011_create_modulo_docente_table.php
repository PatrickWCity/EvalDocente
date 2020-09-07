<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuloDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo_docente', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Identificador de ModuloDocente');
            $table->timestamp('created_at')->nullable()->comment('Fecha de Creación');
            $table->timestamp('updated_at')->nullable()->comment('Fecha de Actualización');
            $table->unsignedBigInteger('modulo_id')->comment('Identificador de Modulo');
            $table->unsignedBigInteger('docente_id')->comment('Identificador de Docente');
            
            $table->foreign('modulo_id')->references('id')->on('modulos')->onDelete('cascade');
            $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulo_docente');
    }
}
