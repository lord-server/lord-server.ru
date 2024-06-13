<?php
namespace App\Http\Controllers\Pages;

use App\Http\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SpawnsController extends Controller
{
    /**
     * @param Request $request
     *
     * @return View
     */
    public function __invoke(Request $request): View
    {
        return view('spawns');
    }
}
