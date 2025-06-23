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
        Schema::create('historial_inventario', function (Blueprint $table) {
            $table->mediumInteger('id', true);
            $table->mediumInteger('Productos_id')->index('Productos_id');
            $table->integer('Cantidad');
            $table->dateTime('Fecha');
            $table->enum('Tipo', ['Entrada', 'Salida']);

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
        Schema::dropIfExists('historial_inventario');
    }
};
