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
        DB::statement("CREATE VIEW `cancelled_orders_info` AS select `c`.`Descripcion` AS `Descripcion`,`c`.`Costo` AS `Costo`,`u`.`Nombre_Usuario` AS `Nombre_Usuario`,`u`.`Apellido_Usuario` AS `Apellido_Usuario`,`u`.`Correo_Usuario` AS `Correo_Usuario`,`d`.`Nombre_Domiciliario` AS `Nombre_Domiciliario`,`d`.`Apellido_Domiciliario` AS `Apellido_Domiciliario`,`c`.`Fecha_Cancelacion` AS `Fecha_Cancelacion` from ((`jackstore`.`pedidos_cancelados` `c` join `jackstore`.`usuarios` `u` on(`c`.`Usuarios_id` = `u`.`id`)) join `jackstore`.`domiciliarios` `d` on(`c`.`Domiciliarios_id` = `d`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `cancelled_orders_info`");
    }
};
