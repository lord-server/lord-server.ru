<?php
namespace App\Http\Controllers\Api\Clan;

use App\Http\Resources\PlayerResource;
use App\Models\Clan;
use App\Models\Player;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PlayerController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Clan $clan): ResourceCollection
    {
        return PlayerResource::collection($clan->players()->paginate());
    }

    /**
     * Add player into clan.
     * Route: `PUT /api/clans/:clan_id/players/:player_id`
     *
     * @param Clan   $clan
     * @param Player $player
     *
     * @return false|Player
     */
    public function update(Clan $clan, Player $player): false|Player
    {
        return $clan->players()->save($player);
    }

    /**
     * Remove player from clan.
     * Route: `DELETE /api/clans/:clan_id/players/:player_id`
     *
     * @param Clan   $clan
     * @param Player $player
     *
     * @return bool
     */
    public function destroy(Clan $clan, Player $player): bool
    {
        if ($player->clan_id !== $clan->id) {
            throw new ModelNotFoundException("Player $player->id does not belongs to clan $clan->id");
        }

        return $player->clan()->dissociate()->save();
    }
}
