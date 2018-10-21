<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFormFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_file', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_form');
            $table->integer('id_file');

            
            $table->foreign('id_form')->references('id')->on('formularios')
                ->onDelete('cascade')
                ->onUpdate('cascade');            
            

            $table->foreign('id_file')->references('id')->on('files')
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
        Schema::dropIfExists('form_file');
    }
}
