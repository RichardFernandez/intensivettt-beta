<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_empleado', 60);
            $table->string('apellidos', 100);
            $table->string('password');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('direccion');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->string('ciudad');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('rol');
            $table->string('foto_empleado');
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
        Schema::drop('empleados');
    }
}
