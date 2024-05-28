<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PlayerResource;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PlayerController
{
    /**
     * Display a listing of the resource.
     */
    public function index(): ResourceCollection
    {
        return PlayerResource::collection(Player::paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Player
    {
        $player       = new Player();
        $player->name = $request->get('name');
        $player->race = $request->get('race');
        $player->save();

        return $player;
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player): Player
    {
        return $player;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player): Player
    {
        $attributes = $request->only(['race', 'experience', 'last_login']);
        $player->fill($attributes);
        $player->save();

        return $player;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        return $player->deleteOrFail();
    }
}
