<?php

use App\Http\Middleware\Localization;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application
    ::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web     : __DIR__ . '/../routes/web.php',
        api     : __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health  : '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('web', [
            Localization::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (NotFoundHttpException $e, Request $request) use ($exceptions) {
            $langCookie = $request->cookie('lang');

            App::setLocale($langCookie
                // Laravel does not provide method to decrypt & validate Cookie,
                // so just do the same as in: vendor/laravel/framework/src/Illuminate/Cookie/CookieValuePrefix.php:27
                ? substr(Crypt::decrypt($request->cookie('lang'), false), 41)
                : App::getLocale()
            );
        });
    })
    ->create()
;
