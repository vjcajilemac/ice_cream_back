<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IceCreamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
			'id'           => intval($this->id),
			'name'         => $this->name,
			'price' => $this->price,
			'flavours_max'          => $this->flavours_max,
			'description'       => $this->description,

		];
    }
}
