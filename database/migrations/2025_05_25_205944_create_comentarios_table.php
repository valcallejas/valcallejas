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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->mediumInteger('id', true);
            $table->mediumInteger('Usuarios_id')->index('Usuarios_id');
            $table->mediumInteger('Productos_id')->index('Productos_id');
            $table->text('Comentario');
            $table->boolean('Calificacion')->nullable();
            $table->dateTime('Fecha')->nullable()->useCurrent();

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
        Schema::dropIfExists('comentarios');
    }
};
