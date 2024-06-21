<?php

namespace App\Http\Resources;

use App\Models\Clan;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;

/**
 * @mixin Clan
 */
class ClanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return Arr::only(parent::toArray($request), [
            'id',
            'name',
            'title',
            'about',
            'description',
            'leader_id',
            'negotiator_id',
            'created_at',
            'updated_at',
            'deleted_at',
        ]);
    }
}
