<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\HomeController::class);
Route::get('/rules', [\App\Http\Controllers\RulesController::class, 'forPlayers']);
Route::get('/clans-rules', [\App\Http\Controllers\RulesController::class, 'forClans']);
