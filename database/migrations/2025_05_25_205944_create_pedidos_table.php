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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->mediumInteger('id', true);
            $table->string('Descripcion_Pedido');
            $table->enum('Estado', ['En Camino', 'En Bodega', 'Cancelado', 'Entregado'])->default('En Bodega');
            $table->string('Costo');
            $table->mediumInteger('Usuarios_id')->index('Usuarios_id');
            $table->tinyInteger('Domiciliarios_id')->index('Domiciliarios_id');
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
        Schema::dropIfExists('pedidos');
    }
};
