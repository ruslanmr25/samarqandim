<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SlideResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'data' => [

                'id' => $this->id,
                'title' => $this->title_uz ?? $this->title_kr ?? $this->title_ru ?? $this->title_en,
                'path' => $this->path,
            ]
        ];
    }
}
