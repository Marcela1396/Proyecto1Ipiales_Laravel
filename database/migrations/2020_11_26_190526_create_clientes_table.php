<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombreCliente', 45);
            $table->string('cedulaCliente', 20);
            $table->string('direccionCliente', 45);
            $table->string('telefonoCliente', 15);
            $table->char('generoCliente', 1);
            $table->string('fotoCliente', 100);   // Varchar 45
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
        Schema::dropIfExists('clientes');
    }
}
