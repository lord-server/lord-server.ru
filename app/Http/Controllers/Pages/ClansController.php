<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controller;
use App\Models\Clan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ClansController extends Controller
{
    /**
     * Handle GET `/clans` request.
     *
     * @param Request $request
     *
     * @return View
     */
    public function __invoke(Request $request): View
    {
        $clans = Clan::query()
            ->with('players')
            ->withCount('players') // we can for now use sub-query, because tables are very-very small
            ->orderBy('players_count', 'desc')
            ->paginate(10)
        ;

        return view('clans', [
            'clans' => $clans,
        ]);
    }
}
