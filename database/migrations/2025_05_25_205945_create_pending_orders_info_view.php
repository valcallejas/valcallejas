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
        DB::statement("CREATE VIEW `pending_orders_info` AS select `p`.`Descripcion` AS `Descripcion`,`p`.`Costo` AS `Costo`,`p`.`Estado` AS `Estado`,`u`.`Nombre_Usuario` AS `Nombre_Usuario`,`u`.`Apellido_Usuario` AS `Apellido_Usuario`,`u`.`Correo_Usuario` AS `Correo_Usuario`,`d`.`Nombre_Domiciliario` AS `Nombre_Domiciliario`,`d`.`Apellido_Domiciliario` AS `Apellido_Domiciliario`,`p`.`Fecha_Asignacion` AS `Fecha_Asignacion` from ((`jackstore`.`pedidos_pendientes` `p` join `jackstore`.`usuarios` `u` on(`p`.`Usuarios_id` = `u`.`id`)) join `jackstore`.`domiciliarios` `d` on(`p`.`Domiciliarios_id` = `d`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `pending_orders_info`");
    }
};
