<?php

namespace App\Http\Resources;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Player
 */
class PlayerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return \Arr::only(parent::toArray($request), [
            'id', 'name', 'race', 'experience', 'last_login', 'clan_id', 'created_at', 'updated_at',
        ]);
    }
}