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
        $attributes = $request->only(['name', 'title', 'leader_id', 'negotiator_id']);
        if ( ! isset($attributes['negotiator_id'])) {
            $attributes['negotiator_id'] = $attributes['leader_id'];
        }

        try {
            return DB::transaction(function () use ($attributes, $request) {
                $clan = (new Clan())->fill($attributes);
                $clan->save();

                Player::find($attributes['leader_id'])->update(['clan_id' => $clan->id]);
                if ($attributes['negotiator_id'] != $attributes['leader_id']) {
                    Player::find($attributes['negotiator_id'])->update(['clan_id' => $clan->id]);
                }

                return $clan;
            });
        } catch (UniqueConstraintViolationException $exception) {
            if ( ! preg_match('/1062 Duplicate entry \'.*\' for key \'(.*)\'/', $exception->getMessage(), $matches)) {
                \Log::error('Can\'t conflicted unique key');
                return response(status: 409);
            }

            $field = (string)str($matches[1])->remove('clans_')->remove('_unique');

            return response([
                'field'   => $field,
                'message' => "Clan with same `$field` already exists",
                'entry'   => (new Clan())->where($field, $attributes[$field])->firstOrFail(),
            ], status: 409);
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
