<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUnidadUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_us', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('id_unidad');
            $table->integer('id_usuario');

            $table->foreign('id_usuario')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_unidad')->references('id')->on('unidades')
                ->onDelete('cascade')
                ->onUpdate('cascade');                   
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        
        Schema::dropIfExists('unidad_us');
    }
}
