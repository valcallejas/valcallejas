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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->mediumInteger('id', true);
            $table->string('Nombre_Usuario');
            $table->string('Apellido_Usuario');
            $table->string('Correo_Usuario')->unique('Correo_Usuario');
            $table->string('Direccion_Usuario');
            $table->string('Telefono_Usuario', 13);
            $table->string('Contraseña', 45);
            $table->enum('Rol', ['Admin', 'User'])->default('User')->index('idx_user_rol');
            $table->timestamp('Fecha_Registro')->useCurrent();
            $table->timestamp('Last_Update')->useCurrentOnUpdate()->useCurrent()->index('idx_user_last_update');

            $table->index(['Correo_Usuario'], 'idx_user_email');
            $table->index(['Nombre_Usuario', 'Apellido_Usuario'], 'idx_user_fullname');
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
        Schema::dropIfExists('usuarios');
    }
};
