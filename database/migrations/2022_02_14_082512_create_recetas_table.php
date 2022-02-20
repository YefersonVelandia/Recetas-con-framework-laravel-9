<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_receta', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo'); 
            $table->text('ingredientes'); 
            $table->text('preparacion'); 
            $table->string('imagen');
            $table->unsignedBigInteger('user_id')->references('id')->on('users')->comment('El usuario que crea la receta'); 
            $table->unsignedBigInteger('categoria_id')->index('categoria_id')->on('categoria_receta')->comment('categoria de la receta'); 
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
        Schema::dropIfExists('recetas');
        Schema::dropIfExists('categoria_receta');
    }
};
