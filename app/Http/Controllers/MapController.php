<?php

namespace App\Http\Controllers;

use App\Http\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Handle `/map` request.
     *
     * @param Request $request
     *
     * @return View
     */
    public function __invoke(Request $request): View
    {
        return view('map');
    }
}
