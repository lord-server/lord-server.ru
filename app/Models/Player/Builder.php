<?php
namespace App\Models\Player;

use App\Models\Player;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;

/**
 * Class Player\Builder
 *
 * @mixin Player
 */
class Builder extends EloquentBuilder
{
    public function thatPlayedInLastMonths(int $count): Builder
    {
        return $this->where('last_login', '>', Carbon::now()->subMonths($count));
    }
}
