<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-csrf-token', function () {
    return response()->json(['_token' => csrf_token()]);
});

Route::get('/games', [GamesController::class, 'index'])->name('games.index');

Route::get('/games/{id}', [GamesController::class, 'show'])->name('games.show');

Route::delete('/games/{id}', [GamesController::class, 'destroy'])->name('games.destroy');
