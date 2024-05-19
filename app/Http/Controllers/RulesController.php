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
    public function __invoke(Request $request): View
    {
        return view('rules');
    }
}
