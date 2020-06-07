<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id();
            $table->dateTime( 'fecha_reservacion', 6);
            $table->string( 'telefono', 500);
            $table->string( 'nombre', 200);
            $table->string( 'correo', 200);
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('cliente_id');

            $table->timestamps();

            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservaciones');
    }
}
