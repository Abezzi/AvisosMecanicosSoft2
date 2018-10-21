<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debilidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_debilidad');
            $table->string('descripcion_debilidad');
            $table->string('resume_debilidad');
            
            $table->integer('id_criterio');
            $table->integer('id_unidad');


            $table->foreign('id_criterio')->references('id')->on('criterios');
            
            $table->foreign('id_unidad')->references('id')->on('unidades');      
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
        Schema::dropIfExists('debilidades');
    }
}
