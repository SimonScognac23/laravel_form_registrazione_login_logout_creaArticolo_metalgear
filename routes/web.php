<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;


Route::get('/', function () {
    return view('welcome');
})->name('home.page');



Route::post('/product/create' , [PlayerController::class, 'collection'])->name('player.collection'); // metodo collection perchè andremo a salvare qualcosa nel database




// rotta per l'indice dei miei  giocatori
Route::get('/player/index' , [PlayerController::class, 'index'])->name('gamedeveloper.index');  // get per recuperare informazioni