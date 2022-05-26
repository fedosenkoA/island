<?php

namespace App\Http\Resources;

use App\Models\Belongings;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Belongings
 */
class BelongingsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'survivor' => new SurvivorResource($this->whenLoaded('survivor')),
            'item' => new ItemResource($this->whenLoaded('item')),
            'count' => $this->count,
        ];
    }
}
