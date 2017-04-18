<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInsumosRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_insumo');
            $table->integer('id_medida')->unsigned();
            $table->foreign('id_medida')->references('id')->on('medidas');
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
        Schema::drop('insumos');
    }
}
