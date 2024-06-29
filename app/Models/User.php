<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use JetBrains\PhpStorm\ArrayShape;

/**
 * Database table `users` representation Model.
 *
 * @property int    $id                    [PK] (autoincrement).
 * @property string $name                  name of logged in user (picked from Discord).
 * @property string $email                 user email address (picked from Discord).
 * @property Carbon $email_verified_at     date time when email was verified (sets when user first login via Discord)
 * @property string $password              hashed user password. as for now: never rehashed. see https://laravel.com/docs/11.x/hashing.
 * @property string $remember_token        not used yet. see https://laravel.com/docs/11.x/authentication#remembering-users
 * @property Carbon $created_at            when db-record was created (automatically fills).
 * @property Carbon $updated_at            when db-record was updated (automatically updates).
 * @property string $discord_id            ID of user in Discord.
 * @property string $discord_token         OAuth2 access token received from Discord.
 * @property string $discord_refresh_token OAuth2 refresh token received from Discord.
 * @property string $discord_avatar        url to user avatar on Discord CDN.
 *
 * @method static User\Builder query()
 *
 * @mixin User\Builder
 */
class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'discord_id',
        'discord_token',
        'discord_refresh_token',
        'discord_avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'discord_token',
        'discord_refresh_token',
    ];

    /**
     * @param string $id
     *
     * @return User|null
     */
    public static function findByDiscordId(string $id): ?User
    {
        return static::query()->withDiscordId($id)->first();
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    #[ArrayShape(['email_verified_at' => "string", 'password' => "string"])]
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
        ];
    }

    /**
     * @param $query
     *
     * @return User\Builder
     */
    public function newEloquentBuilder($query): User\Builder
    {
        return new User\Builder($query);
    }
}
