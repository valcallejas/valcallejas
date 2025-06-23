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
        Schema::create('carrito', function (Blueprint $table) {
            $table->mediumInteger('id', true);
            $table->mediumInteger('Usuarios_id')->index('Usuarios_id');
            $table->integer('Cantidad')->default(1);
            $table->dateTime('Fecha_agregado')->nullable()->useCurrent();
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
        Schema::dropIfExists('carrito');
    }
};
