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
        Schema::create('pedidos_pendientes', function (Blueprint $table) {
            $table->mediumInteger('id', true);
            $table->string('Descripcion');
            $table->string('Costo');
            $table->enum('Estado', ['En Camino', 'En Bodega']);
            $table->mediumInteger('Usuarios_id')->index('Usuarios_id');
            $table->tinyInteger('Domiciliarios_id')->index('Domiciliarios_id');
            $table->dateTime('Fecha_Asignacion')->nullable();
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
        Schema::dropIfExists('pedidos_pendientes');
    }
};
