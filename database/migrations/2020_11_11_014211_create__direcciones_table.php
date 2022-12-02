<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_direcciones', function (Blueprint $table) {
            $table->bigIncrements('id_direccion');
            $table->Integer('clientes_id');
            $table->string('calle',45);
            $table->Integer('numero_direccion');
            $table->string('localidad',45);
            $table->string('municipio',45);
            $table->string('estado',45);
            
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
        Schema::dropIfExists('tb_direcciones');
    }
}
