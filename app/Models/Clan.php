<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Database table `clans` representation Model.
 *
 * @property int    $id            [PK] (autoincrement).
 * @property string $name          Name of the Clan (technical as in game).
 * @property string $title         Human-readable name(title) of th Clan.
 * @property string $about         Short Clan presentation. (describes about clan's and/or it's position).
 * @property string $description   Full Clan description.
 * @property int    $leader_id     ID of Player, who leads the Clan.
 * @property int    $negotiator_id ID of Player, who is the clan's representative in negotiations
 * @property Carbon $createdAt     when db-record was created (automatically fills).
 * @property Carbon $updatedAt     when db-record was updated (automatically updates).
 */
class Clan extends Model
{
    use HasFactory;
}
