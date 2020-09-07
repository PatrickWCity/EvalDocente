<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_identities', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Identificador de Identidad Social');
            $table->bigInteger('user_id')->comment('Identificador de Usuario');           
            $table->string('provider_name')->nullable()->comment('Nombre de Proveedor');
            $table->string('provider_id')->unique()->nullable()->comment('Identificador de Proveedor');          
            $table->timestamp('created_at')->nullable()->comment('Fecha de Creación');
            $table->timestamp('updated_at')->nullable()->comment('Fecha de Actualización');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_identities');
    }
}
