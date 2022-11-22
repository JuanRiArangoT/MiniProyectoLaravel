<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('SNombre');
            $table->string('Apellido');
            $table->string('SApellido');
            $table->date('FechaNacimiento');
            $table->string('Correo');
            $table->string('Documento');
            $table->integer('IdDocumento');
            $table->string('Contrasena');
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
        Schema::dropIfExists('users');
    }
};
