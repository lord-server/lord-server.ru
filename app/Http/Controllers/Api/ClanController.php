<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ClanResource;
use App\Models\Clan;
use App\Models\Player;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Throwable;

class ClanController
{
    /**
     * Display a listing of the resource.
     */
    public function index(): ResourceCollection
    {
        return ClanResource::collection(Clan::paginate());
    }

    /**
     * Store a newly created resource in storage.
     * @throws Throwable
     */
    public function store(Request $request): Clan|Response
    {
        try {
            return DB::transaction(function () use ($request) {
                $attributes = $request->only(['name', 'title', 'leader_id', 'negotiator_id']);
                if ( ! isset($attributes['negotiator_id'])) {
                    $attributes['negotiator_id'] = $attributes['leader_id'];
                }
                $clan = (new Clan())->fill($attributes);
                $clan->save();

                Player::find($attributes['leader_id'])->update(['clan_id' => $clan->id]);
                if ($attributes['negotiator_id'] != $attributes['leader_id']) {
                    Player::find($attributes['negotiator_id'])->update(['clan_id' => $clan->id]);
                }

                return $clan;
            });
        } catch (UniqueConstraintViolationException) {
            return response(status: 409);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Clan $clan): Clan
    {
        return $clan->loadMissing('players');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clan $clan): Clan
    {
        $attributes = $request->only(['title', 'about', 'description', 'negotiator_id', 'is_blocked', 'is_online']);
        $clan->fill($attributes);
        $clan->save();

        return $clan;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @throws Throwable
     */
    public function destroy(Clan $clan): ?bool
    {
        return $clan->deleteOrFail();
    }
}
