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
        DB::statement("CREATE VIEW `alerts` AS select `a`.`Descripcion` AS `Descripcion`,`p`.`Descripcion_Producto` AS `Producto` from (`jackstore`.`advertencias` `a` join `jackstore`.`productos` `p` on(`a`.`Productos_id` = `p`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `alerts`");
    }
};
