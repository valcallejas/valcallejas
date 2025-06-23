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
        Schema::create('domiciliarios', function (Blueprint $table) {
            $table->tinyInteger('id', true);
            $table->string('Nombre_Domiciliario');
            $table->string('Apellido_Domiciliario');
            $table->string('Correo_Domiciliario')->unique('Correo_Domiciliario');
            $table->string('Telefono_Domiciliario', 13);
            $table->string('Descripcion_Vehiculo')->index('idx_domiciliary_vehicle');
            $table->string('Placa', 6)->unique('Placa');
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
        Schema::dropIfExists('domiciliarios');
    }
};
