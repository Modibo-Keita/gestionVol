<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passager extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'vol_id',
        'reservation_id',
        'num',
        'email',
        'pays',
        'login',
        'password',
    ];
}

            // $table->id();
            // $table->string('nom');
            // $table->string('prenom');
            // $table->string('sexe');
            // $table->foreignId("vol_id")->constrained("vols");
            // $table->foreignId("reservation_id")->constrained("reservations");
            // $table->integer('num');
            // $table->string('email');
            // $table->string('pays');
            // $table->string('login');
            // $table->string('password');
            // $table->timestamps();
