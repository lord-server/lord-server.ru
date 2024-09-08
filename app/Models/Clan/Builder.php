<?php

namespace App\Models\Clan;

use App\Models\Clan;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;

/**
 * Class Player\Builder.
 *
 * @mixin Clan
 */
class Builder extends EloquentBuilder
{
    /**
     * @return Builder
     */
    public function thatActive(): Builder
    {
        return $this->where('is_blocked', false);
    }
}
