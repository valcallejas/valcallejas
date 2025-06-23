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
        Schema::create('productos', function (Blueprint $table) {
            $table->mediumInteger('id', true);
            $table->string('Descripcion_Producto');
            $table->tinyInteger('Categorias_id')->index('Categorias_id');
            $table->decimal('Precio_und', 10);
            $table->string('Marca');
            $table->enum('Estado', ['Diponible', 'Agotado']);
            $table->tinyInteger('Stock');
            $table->boolean('Min_Stock')->default(false);
            $table->tinyInteger('Max_Stock')->default(70);
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
        Schema::dropIfExists('productos');
    }
};
