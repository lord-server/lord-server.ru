<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controller;
use App\Models\Player;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    /**
     * Handle `/players` request.
     *
     * @param Request $request
     *
     * @return View
     */
    public function __invoke(Request $request): View
    {
        $players = Player::query()
            ->thatPlayedInLastMonths(1)
            ->orderBy('last_login', 'desc')
            ->paginate()
        ;

        return view('players', [
            'players' => $players,
        ]);
    }
}
