<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Database table `players` representation Model.
 *
 * @property int         $id         [PK] (autoincrement).
 * @property string      $name       player MT account name.
 * @property Player\Race $race       the race of the player (one of enum Player\Race::< cases >).
 * @property int         $experience experience score of the Player, gained in the game.
 * @property Carbon      $lastLogin  date & time, when player was latest logged in the game.
 * @property int         $clan_id    ID of the Clan, in which the Player is.
 * @property Carbon      $createdAt  when db-record was created (automatically fills).
 * @property Carbon      $updatedAt  when db-record was updated (automatically updates).
 */
class Player extends Model
{
    use HasFactory;
}
