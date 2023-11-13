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
