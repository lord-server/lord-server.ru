<?php
namespace App\Http\Controllers\Api\Clan;

use App\Http\Resources\PlayerResource;
use App\Models\Clan;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PlayerController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Clan $clan): ResourceCollection
    {
        return PlayerResource::collection($clan->players()->paginate());
    }
}
