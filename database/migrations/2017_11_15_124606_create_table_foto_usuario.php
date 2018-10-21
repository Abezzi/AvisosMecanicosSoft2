<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFotoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotousuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario');

            $table->string('nombre_foto');
            $table->foreign('id_usuario')->references('id')->on('users')
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
    public function down()
    {
        Schema::dropIfExists('fotousuario');
    }
}
