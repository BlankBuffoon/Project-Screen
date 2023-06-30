<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectDetailedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'status' => $this->status,
            'expiration_date' => $this->expiration_date,
            'maintainers' => MaintainerResource::collection($this->maintainers()->get()),
            'developers' => DeveloperResource::collection($this->developers()->get()),
        ];
    }
}
