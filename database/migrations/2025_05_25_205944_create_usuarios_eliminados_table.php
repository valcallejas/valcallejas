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
        Schema::create('usuarios_eliminados', function (Blueprint $table) {
            $table->mediumInteger('id', true);
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Correo')->unique('Correo');
            $table->string('Direccion');
            $table->string('Telefono', 13);
            $table->string('Contraseña', 45);
            $table->enum('Rol', ['Admin', 'User']);
            $table->timestamp('Fecha_Registro')->useCurrentOnUpdate()->useCurrent();
            $table->dateTime('Fecha_Eliminacion')->nullable();
            $table->timestamp('Last_Update')->useCurrentOnUpdate()->useCurrent();

            $table->unique(['id'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_eliminados');
    }
};
