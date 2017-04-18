<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSuplementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suplementos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_suplemento');
            $table->string('tipo_suplemento');
            $table->string('presentacion');
            $table->string('imagen');
            $table->integer('id_marca')->unsigned();
            $table->foreign('id_marca')->references("id")->on('marcas_suplementos');
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
        Schema::drop('suplementos');
    }
}
