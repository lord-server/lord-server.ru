<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Database table `clans` representation Model.
 *
 * @property int    $id            [PK] (autoincrement).
 * @property string $name          Name of the Clan (technical as in game).
 * @property string $title         Human-readable name(title) of th Clan.
 * @property string $about         Short Clan presentation. (describes about clan's and/or it's position).
 * @property string $description   Full Clan description.
 * @property int    $leader_id     ID of Player, who leads the Clan.
 * @property int    $negotiator_id ID of Player, who is the clan's representative in negotiations.
 * @property Carbon $created_at    when db-record was created (automatically fills).
 * @property Carbon $updated_at    when db-record was updated (automatically updates).
 * @property Carbon $deleted_at    soft deleting (automatically updates).
 * @property-read Player   $leader        `Player`, who leads the Clan.
 * @property-read Player   $negotiator    `Player`, who is the clan's representative in negotiations.
 * @property-read Player[] $players       List of Clan `Player`'s, who is the clan's members.
 */
class Clan extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable. For ex.: in API Controller via `$clan->fill()`.
     *
     * @var array
     */
    protected $fillable = ['name', 'title', 'about', 'description', 'leader_id', 'negotiator_id'];
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'deleted_at' => 'datetime:Y-m-d H:i:s',
    ];

    /**
     * @return HasOne
     */
    public function leader(): HasOne
    {
        return $this->hasOne(Player::class);
    }

    /**
     * @return HasOne
     */
    public function negotiator(): HasOne
    {
        return $this->hasOne(Player::class);
    }

    /**
     * @return HasMany
     */
    public function players(): HasMany
    {
        return $this->hasMany(Player::class);
    }
}
