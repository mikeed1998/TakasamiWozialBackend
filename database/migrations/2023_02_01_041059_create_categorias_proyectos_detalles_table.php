<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasProyectosDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_proyectos_detalles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('categoria_n');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('imagen');
            $table->string('logo');
            $table->string('categoria_p')->nullable();
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
        Schema::dropIfExists('categorias_proyectos_detalles');
    }
}
