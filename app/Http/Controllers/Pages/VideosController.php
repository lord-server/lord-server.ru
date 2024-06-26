<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Handle `/videos` request.
     *
     * @param Request $request
     *
     * @return View
     */
    public function __invoke(Request $request): View
    {
        return view('videos');
    }
}
