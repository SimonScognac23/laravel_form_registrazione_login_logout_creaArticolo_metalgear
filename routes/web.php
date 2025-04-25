<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('welcome');
})->name('home.page');


//PLAYER CONTROLLER

// Inserimento giocatori
Route::get('/player/create' , [PlayerController::class, 'create'])->name('player.create')->middleware('auth'); // metodo create perchè andremo a salvare qualcosa nel database




// rotta post
Route::post('/player/submit' , [PlayerController::class, 'store'])->name('player.submit')->middleware('auth');  



// rotta per visualizzare la lista dei giocatori
Route::get('/player/index' , [PlayerController::class, 'index'])->name('player.index'); 


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




// ARTICLE CONTROLLER

// rotta CREATE adibita a portarci nel form di creazione di un articolo
// Route::get  --> mostrami una risorsa 
//middleware serve per dire solo gli utenti autenticati possono scrivere nel form

Route::get('/article/create' ,  [ArticleController::class, 'create'] )->name('article.create')->middleware('auth');


Route::post('/article/store' ,  [ArticleController::class, 'store'] )->name('article.store')->middleware('auth');



//Rotta show
Route::get('/article/index' ,  [ArticleController::class, 'index'] )->name('article.index');


// Rotta parametrica (per passare il riferimento dell'articolo)
// posso mettere o {article} oppure {id} è la stessa cosa, passerà sempre e comunque id
Route::get('article/show/{article}',  [ArticleController::class, 'show'] )->name('article.show'); // Niente middleware affinche tutti gli utenti che navigano nel sito vedano la pagina