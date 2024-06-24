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
 * @property boolean     $is_online  determine whether the player is online.
 * @property Carbon      $last_login date & time, when player was latest logged in the game.
 * @property int         $clan_id    ID of the Clan, in which the Player is.
 * @property Carbon      $created_at when db-record was created (automatically fills).
 * @property Carbon      $updated_at when db-record was updated (automatically updates).
 * @property-read Clan   $clan       `Clan`, in which the Player is.
 *
 * @method static Player\Builder query()
 *
 * @mixin Player\Builder
 */
class Player extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable. For ex.: in API Controller via `$player->fill()`.
     *
     * @var array
     */
    protected $fillable = ['race', 'experience', 'last_login', 'is_online'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'last_login' => 'datetime:Y-m-d H:i:s',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'is_online'  => 'boolean',
    ];

    /**
     * Create a new belongs to relationship. (One to many).
     *
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

    /**
     * @param Clan $clan
     *
     * @return bool
     */
    public function isLeaderOf(Clan $clan): bool
    {
        return $this->id === $clan->leader_id;
    }

    public function isNegotiatorOf(Clan $clan): bool
    {
        return $this->id === $clan->negotiator_id;
    }
}
