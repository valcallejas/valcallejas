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
        Schema::table('comentarios', function (Blueprint $table) {
            $table->foreign(['Productos_id'], 'comentarios_ibfk_2')->references(['id'])->on('productos');
            $table->foreign(['Usuarios_id'], 'comentarios_ibfk_1')->references(['id'])->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comentarios', function (Blueprint $table) {
            $table->dropForeign('comentarios_ibfk_2');
            $table->dropForeign('comentarios_ibfk_1');
        });
    }
};
