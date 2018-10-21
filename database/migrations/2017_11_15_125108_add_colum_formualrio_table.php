<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumFormualrioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formularios', function(Blueprint $table){
            $table->string('debilidad')->default('');
            $table->string('estado')->default('');
            $table->string('observaciones_r')->default('');
            $table->string('observaciones_d')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formularios', function(Blueprint $table){
            $table->dropColumn('debilidad');
            $table->dropColumn('estado');
            $table->dropColumn('observaciones_r');
            $table->dropColumn('observaciones_d');
        });
    }
}
