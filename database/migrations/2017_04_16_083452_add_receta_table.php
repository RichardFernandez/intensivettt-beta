<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRecetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_receta');
            $table->string('video');
            $table->string('imagen');
            $table->string('preparacion');
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
        Schema::drop('recetas');
    }
}
