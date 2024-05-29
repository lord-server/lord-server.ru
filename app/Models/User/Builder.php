<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;

/**
 * Class User\Builder.
 *
 * @mixin User
 */
class Builder extends EloquentBuilder
{
    /**
     * @param string $id
     *
     * @return Builder|User
     */
    public function withDiscordId(string $id): Builder|User
    {
        return $this->where('discord_id', $id);
    }
}
