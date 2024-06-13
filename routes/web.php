<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pages;

Route::get('/', HomeController::class);
Route::get('/about', Pages\AboutController::class);
Route::get('/play', Pages\PlayController::class);
Route::get('/rules', [Pages\RulesController::class, 'forPlayers']);
Route::get('/clans-rules', [Pages\RulesController::class, 'forClans']);
Route::get('/map', Pages\MapController::class);
Route::get('/spawns', Pages\SpawnsController::class);
Route::get('/players', Pages\PlayersController::class);
Route::get('/clans', Pages\ClansController::class);
Route::get('/clans-new', Pages\ClansNewController::class);
Route::get('/videos', Pages\VideosController::class);

Route::get('/auth/redirect', [AuthController::class, 'redirect']);
Route::get('/auth/comeback', [AuthController::class, 'comeback']);
