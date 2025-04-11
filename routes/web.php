<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;


Route::get('/', function () {
    return view('welcome');
})->name('home.page');


// Inserimento giocatori
Route::get('/player/create' , [PlayerController::class, 'create'])->name('player.create'); // metodo create perchè andremo a salvare qualcosa nel database




// rotta post
Route::post('/player/submit' , [PlayerController::class, 'store'])->name('player.submit');  



// rotta per visualizzare la lista dei giocatori
Route::get('/player/index' , [PlayerController::class, 'index'])->name('player.index');  
