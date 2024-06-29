<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;

class RulesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function forPlayers(): View
    {
        return view('rules.for-players.' . App::getLocale());
    }

    public function forClans(): View
    {
        return view('rules.for-clans.' . App::getLocale());
    }
}
