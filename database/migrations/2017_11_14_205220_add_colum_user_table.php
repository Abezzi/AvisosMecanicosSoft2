<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('role')->nullable();
            $table->string('color')->default('');
            $table->string('foto')->default('');
            $table->string('foto1')->default('');
            $table->string('foto2')->default('');
            $table->string('foto3')->default('');
            $table->integer('id_unidad')->unsigned();
            $table->foreign('id_unidad')->references('id')->on('unidades')
                ->onDelete('cascade')
                ->onUpdate('cascade');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('role');
            $table->dropColumn('color');
            $table->dropColumn('foto');
            $table->dropColumn('foto1');
            $table->dropColumn('foto2');
            $table->dropColumn('foto3');
            $table->dropColumn('id_unidad');

        });
    }
}
