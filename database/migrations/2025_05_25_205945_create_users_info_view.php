<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `users_info` AS select `jackstore`.`usuarios`.`Nombre_Usuario` AS `Nombre_Usuario`,`jackstore`.`usuarios`.`Apellido_Usuario` AS `Apellido_Usuario`,`jackstore`.`usuarios`.`Telefono_Usuario` AS `Telefono_Usuario`,`jackstore`.`usuarios`.`Direccion_Usuario` AS `Direccion_Usuario`,`jackstore`.`usuarios`.`Rol` AS `rol`,`jackstore`.`usuarios`.`Fecha_Registro` AS `fecha_registro` from `jackstore`.`usuarios`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `users_info`");
    }
};
