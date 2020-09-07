<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Identificador de Usuario');
            $table->string('name')->comment('Nombre de Usuario');
            $table->string('email')->nullable()->unique()->comment('Correo Electrónico de Usuario');
            $table->timestamp('email_verified_at')->nullable()->comment('Fecha de Verificación de Usuario por Correo Electrónico');
            $table->string('password')->nullable()->comment('Clave de Usuario');
            $table->string('locale', 5)->default('es')->comment('Localizacion de Cuenta de Usuario');
            $table->rememberToken()->comment('Token de Restablecimiento de Contraseña');
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
        Schema::dropIfExists('users');
    }
}
