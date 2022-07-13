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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('voyage');
            $table->integer('nbre_voyageur');
            $table->foreignId("vol_id")->constrained("vols");
            $table->foreignId("classe_id")->constrained("classes");
            $table->timestamps();
        });

        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table("passagers", function(Blueprint $table){
            $table->dropConstrainedForeignId("vol_id");
            $table->dropConstrainedForeignId("classe_id");
        });
        Schema::dropIfExists('reservations');
    }
};
