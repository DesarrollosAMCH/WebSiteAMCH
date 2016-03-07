<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRegionales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regionales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',150);
            $table->string('foto',255);
            $table->text('descripcion');
            $table->integer('tiempo_servicio');
            $table->text('clubes');

            $table->integer('cargo')->unsigned();
            $table->integer('rango')->unsigned();
            $table->integer('zona')->unsigned();
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
        Schema::drop('regionales');
    }
}
