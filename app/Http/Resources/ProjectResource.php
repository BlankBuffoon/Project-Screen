<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *      schema="ProjectResource",
 *      @OA\Property(property="id", type="id", example="11"),
 *      @OA\Property(property="name", type="string", example="Project Screen"),
 *      @OA\Property(property="description", type="string", example="Some Project description"),
 *      @OA\Property(property="status", type="integer", example="1"),
 *      @OA\Property(property="date", type="date", example="2021-03-12"),
 * )
 */
class ProjectResource extends JsonResource
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
        ];
    }
}
