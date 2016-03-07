<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaClubes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',150);
            $table->string('foto',255);
            $table->integer('cantidad_miembros');
            $table->integer('fundado');
            $table->string('direccion',255);
            $table->string('horario',150);
            $table->integer('estrellas');

            $table->integer('zona')->unsigned();
            $table->integer('iglesia')->unsigned();
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
        Schema::drop('clubes');
    }
}
