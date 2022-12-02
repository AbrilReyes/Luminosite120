<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detalle_ventas', function (Blueprint $table) {
            $table->bigIncrements('id_detalle_venta');
            $table->integer('cantidad');
            $table->float('subtotal');

            $table->unsignedBigInteger('venta_id');
            $table->foreign('venta_id')->references('id_venta')->on('tb_ventas');

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
        Schema::dropIfExists('tb_detalle_ventas');
    }
}
