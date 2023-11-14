<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// rotta home
Route::get('/',[PublicController::class,'home'])->name('home');

// rotta per la creazione del form dei giochi
Route::get('/game/create',[GameController::class,'create'])->name('games.create');
Route::post('/game/store',[GameController::class,'store'])->name('game.store');

// rotta visualizzazione dati
Route::get('/games',[GameController::class,'index'])->name('game.index');
// Rotta parametrica per id
Route::get('/game/{game}',[GameController::class,'show'])->name('game.show');

// Rotta per la modifica
Route::get('/game/edit/{game}',[GameController::class,'edit'])->name('game.edit');
Route::put('/game/update/{game}',[GameController::class,'update'])->name('game.update');

// Rotta per eleminazione
Route::delete('/game/delete/{game}',[GameController::class,'destroy'])->name('game.destroy');