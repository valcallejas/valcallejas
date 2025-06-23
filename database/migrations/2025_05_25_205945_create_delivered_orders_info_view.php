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
        DB::statement("CREATE VIEW `delivered_orders_info` AS select `e`.`Descripcion` AS `Descripcion`,`e`.`Costo` AS `Costo`,`u`.`Nombre_Usuario` AS `Nombre_Usuario`,`u`.`Apellido_Usuario` AS `Apellido_Usuario`,`u`.`Correo_Usuario` AS `Correo_Usuario`,`d`.`Nombre_Domiciliario` AS `Nombre_Domiciliario`,`d`.`Apellido_Domiciliario` AS `Apellido_Domiciliario`,`e`.`Fecha_Entrega` AS `Fecha_Entrega` from ((`jackstore`.`pedidos_entregados` `e` join `jackstore`.`usuarios` `u` on(`e`.`Usuarios_id` = `u`.`id`)) join `jackstore`.`domiciliarios` `d` on(`e`.`Domiciliarios_id` = `d`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `delivered_orders_info`");
    }
};
