<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_usuario');
            $table->string('email_usuario');
            $table->integer('unidad')->unsigned();
            $table->integer('registro')->unsigned();
            $table->integer('ambitoa')->unsigned();
            $table->integer('ambitog')->unsigned();
            $table->string('nplanmejoras');
            $table->integer('debilidad');
            $table->string('descripcion');
            $table->string('resultado');
            $table->string('almacenamiento');
            $table->string('nombre_responsable');
            $table->string('email_responsable');
            $table->string('palabraclave');
            $table->string('resume');
            $table->string('codigo');
            $table->string('folio');
            $table->string('estado');
            $table->string('observaciones_r');
            $table->string('observaciones_d');
            $table->integer('autoridad_interno');
            $table->integer('admin_interno');
            $table->integer('docente_interno');
            $table->integer('estudiante_interno');
            $table->integer('autoridad_externo');
            $table->integer('admin_externo');
            $table->integer('docente_externo');
            $table->integer('estudiante_externo');
            
            $table->foreign('unidad')->references('id')->on('unidades')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            

            $table->foreign('proceso')->references('id')->on('procesos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            
            
            $table->foreign('registro')->references('id')->on('registros')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');            
            
            

            $table->foreign('ambitoa')->references('id')->on('ambitos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            


            $table->foreign('ambitog')->references('id')->on('ambitos_geograficos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            
            

            $table->integer('criterio')->unsigned();
            $table->foreign('criterio')->references('id')->on('criterios')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');            

            

            $table->foreign('debilidad')->references('id')->on('debilidades');





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
        Schema::dropIfExists('formularios');
    }
}
