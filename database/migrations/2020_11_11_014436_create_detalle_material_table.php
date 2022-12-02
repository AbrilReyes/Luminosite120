<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detalle_material', function (Blueprint $table) {
            $table->bigIncrements('id_detalle_meterial');
            $table->string('material_principal',45);
            $table->string('material_secundario',45);

            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id_material')->on('tb_materiales');

            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id_producto')->on('tb_productos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_detalle_material');
    }
}
