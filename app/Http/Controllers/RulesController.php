<?php

namespace App\Http\Controllers;

use App\Http\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function forPlayers(Request $request): View
    {
        return view('rules.for-players');
    }

    public function forClans(): View
    {
        return view('rules.for-clans');
    }
}
