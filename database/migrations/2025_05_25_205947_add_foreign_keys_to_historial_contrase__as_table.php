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
        Schema::table('historial_contraseñas', function (Blueprint $table) {
            $table->foreign(['Usuarios_id'], 'historial_contraseñas_ibfk_1')->references(['id'])->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historial_contraseñas', function (Blueprint $table) {
            $table->dropForeign('historial_contraseñas_ibfk_1');
        });
    }
};
