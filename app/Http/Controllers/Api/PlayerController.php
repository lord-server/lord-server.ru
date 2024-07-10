<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PlayerResource;
use App\Models\Player;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;
use Throwable;

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
    public function store(Request $request): Player|Response
    {
        try {
            $player         = new Player();
            $player->name   = $request->get('name');
            $player->race   = $request->get('race', Player\Race::DEFAULT->value);
            $player->gender = $request->get('gender', Player\Gender::DEFAULT->value);
            $player->save();
        } catch (UniqueConstraintViolationException) {
            return response(Player::getByName($request->get('name')), status: 409);
        }

        return $player->refresh();
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
        $attributes = $request->only(['race', 'gender', 'experience', 'last_login', 'is_online']);
        $player->fill($attributes);
        $player->save();

        return $player;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Player $player
     *
     * @return bool|null
     * @throws Throwable
     */
    public function destroy(Player $player): ?bool
    {
        return $player->deleteOrFail();
    }
}
