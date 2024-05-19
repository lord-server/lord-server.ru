<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\HomeController::class);
Route::get('/rules', [\App\Http\Controllers\RulesController::class, 'forPlayers']);
Route::get('/clans-rules', [\App\Http\Controllers\RulesController::class, 'forClans']);
Route::get('/map', \App\Http\Controllers\MapController::class);
Route::get('/clans', \App\Http\Controllers\ClansController::class);
Route::get('/videos', \App\Http\Controllers\VideosController::class);
