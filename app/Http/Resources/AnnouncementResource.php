<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnnouncementResource extends JsonResource
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
            "body" => $this->whenNotNull($this->body_uz ?? $this->body_en ?? $this->body_kr ?? $this->body_ru),
            "description" => $this->whenNotNull($this->description_uz ?? $this->description_en ?? $this->description_kr ?? $this->description_ru),

            'imagePath' => $this->imagePath,
            "status" => $this->whenNotNull($this->status),
            'createdAt'=>$this->created_at,



            $this->mergeWhen($request->lang == 'all', [
                'titleUz' => $this->title_uz,
                'titleRu' => $this->title_ru,
                'titleEn' => $this->title_en,
                'titleKr' => $this->title_kr,
                'bodyUz' => $this->body_uz,
                'bodyRu' => $this->body_ru,
                'bodyEn' => $this->body_en,
                'bodyKr' => $this->body_ru,
                'descriptionUz' => $this->description_uz,
                'descriptionRu' => $this->description_ru,
                'descriptionEn' => $this->description_en,
                'descriptionKr' => $this->description_ru,

            ])


        ];
    }
}
