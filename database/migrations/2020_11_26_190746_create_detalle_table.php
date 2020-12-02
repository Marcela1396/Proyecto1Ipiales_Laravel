<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('factura')->unsigned();
            $table->bigInteger('producto')->unsigned();
            $table->integer('cantidad');
            $table->float('precio');
            $table->foreign('factura')  //Creación de la llave foranea
                  ->references('id')
                  ->on('facturas')
                  ->onDelete('cascade');
            $table->foreign('producto')  //Creación de la llave foranea
                  ->references('id')
                  ->on('productos')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('detalle');
    }
}
