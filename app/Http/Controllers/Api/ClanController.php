<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ClanResource;
use App\Models\Clan;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

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
    public function store(Request $request): Clan
    {
        $clan                = new Clan();
        $clan->name          = $request->get('name');
        $clan->title         = $request->get('title');
        $clan->leader_id     = $request->get('leader_id');
        $clan->negotiator_id = $request->get('negotiator_id');
        $clan->save();

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
     */
    public function destroy(Clan $clan)
    {
        return $clan->deleteOrFail();
    }
}
