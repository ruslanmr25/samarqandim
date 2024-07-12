<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
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
            "title" => $this->title_uz ?? $this->title_en ?? $this->title_kr ?? $this->title_ru,
            "body" => $this->body_uz ?? $this->body_en ?? $this->body_kr ?? $this->body_ru,
            "createdAt"=>$this->created_at
        ];
    }
}
