<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ClanResource;
use App\Models\Clan;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;
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
     */
    public function store(Request $request): Clan|Response
    {
        try {
            $attributes = $request->only(['name','title','leader_id','negotiator_id']);
            if ( ! isset($attributes['negotiator_id'])) {
                $attributes['negotiator_id'] = $attributes['leader_id'];
            }

            $clan = (new Clan())->fill($attributes);
            $clan->save();
        } catch (UniqueConstraintViolationException) {
            return response(status: 409);
        }

        return $clan;
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
        $attributes = $request->only(['title', 'about', 'description', 'negotiator_id']);
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
