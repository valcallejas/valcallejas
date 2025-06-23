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
        Schema::table('advertencias', function (Blueprint $table) {
            $table->foreign(['Productos_id'], 'advertencias_ibfk_1')->references(['id'])->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('advertencias', function (Blueprint $table) {
            $table->dropForeign('advertencias_ibfk_1');
        });
    }
};
