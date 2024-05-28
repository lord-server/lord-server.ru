<?php

use App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;

Route::apiResources([
    '/players' => Api\PlayerController::class,
    '/clans'   => Api\ClanController::class,
]);
