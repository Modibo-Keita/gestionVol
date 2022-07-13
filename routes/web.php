<?php


use App\Http\Controllers\PassagerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view("accueil");
});

Route::controller(PassagerController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/passager/create', 'create');
    Route::get('/passager/{id}', 'show');
    Route::get('/passager/{id}/edit', 'edit');


    Route::post('/passager', 'store');
    Route::patch('/passager/{id}', 'update');
    Route::delete('/passager/{id}', 'destroy');

});
// Route::get('/', [PassagerController::class, "index"]);

