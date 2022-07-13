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
        Schema::create('passagers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->foreignId("vol_id")->constrained("vols");
            $table->foreignId("reservation_id")->constrained("reservations");
            $table->integer('num');
            $table->string('email');
            $table->string('pays');
            $table->string('login');
            $table->string('password');
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
            $table->dropConstrainedForeignId("reservation_id");
        });
        Schema::dropIfExists('passagers');
    }
};
