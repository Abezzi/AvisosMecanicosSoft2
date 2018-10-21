<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlanAnual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plananual', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_debilidad');
            $table->string('id_unidad');
            $table->string('nombre_debilidad');
            $table->string('resume_debilidad');
            $table->string('comentario');
            $table->string('año');
            $table->string('responsables');
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
        Schema::dropIfExists('plananual');
    }
}
