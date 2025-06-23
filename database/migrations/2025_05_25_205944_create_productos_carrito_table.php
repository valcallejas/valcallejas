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
        Schema::create('productos_carrito', function (Blueprint $table) {
            $table->mediumInteger('id', true);
            $table->mediumInteger('Productos_id')->index('Productos_id');
            $table->mediumInteger('Carrito_id')->index('Carrito_id');

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
        Schema::dropIfExists('productos_carrito');
    }
};
