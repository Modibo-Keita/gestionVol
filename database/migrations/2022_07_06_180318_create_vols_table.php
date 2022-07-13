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
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->string('depart');
            $table->dateTime('depart_time');
            $table->string('destination');
            $table->dateTime('desnation_time');
            $table->string('duree_vol');
            $table->integer('nbre_place');
            $table->string('appareil');
            $table->string('compagnie');
            $table->string('classe');
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
        Schema::dropIfExists('vols');
    }
};
