<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumTableDebilidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('debilidades', function(Blueprint $table){
            $table->string('id_criterio');
            $table->string('id_unidad')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('debilidades', function(Blueprint $table){
            $table->dropColumn('id_criterio');
            $table->dropColumn('id_unidad');
        });
    }
}
