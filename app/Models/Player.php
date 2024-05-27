<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Database table `players` representation Model.
 *
 * @property int         $id         [PK] (autoincrement).
 * @property string      $name       player MT account name.
 * @property Player\Race $race       the race of the player (one of enum Player\Race::< cases >).
 * @property int         $experience experience score of the Player, gained in the game.
 * @property Carbon      $last_login  date & time, when player was latest logged in the game.
 * @property int         $clan_id    ID of the Clan, in which the Player is.
 * @property Carbon      $createdAt  when db-record was created (automatically fills).
 * @property Carbon      $updatedAt  when db-record was updated (automatically updates).
 *
 * @property-read Clan   $clan `Clan`, in which the Player is.
 *
 * @method static Player\Builder query()
 *
 * @mixin Player\Builder
 */
class Player extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function clan(): BelongsTo
    {
        return $this->belongsTo(Clan::class);
    }

    /**
     * @param $query
     *
     * @return Player\Builder
     */
    public function newEloquentBuilder($query)
    {
        return new Player\Builder($query);
    }

    public function getDates()
    {
        return ['last_login'];
    }
}
