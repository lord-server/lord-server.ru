<?php

use App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;

Route::apiResource('/clans.players', Api\Clan\PlayerController::class)
    ->only(['index', 'update', 'destroy'])
;

Route::apiResources([
    '/players' => Api\PlayerController::class,
    '/clans'   => Api\ClanController::class,
]);

