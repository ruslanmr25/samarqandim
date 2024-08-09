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


            'id' => $this->id,
            'title' => $this->title_uz ?? $this->title_kr ?? $this->title_ru ?? $this->title_en,
            'description' => $this->description_uz ?? $this->description_kr ?? $this->description_ru ?? $this->description_en,

            'imagePath' => $this->imagePath,
            $this->mergeWhen($request->lang == 'all', [
                'titleUz' => $this->title_uz,
                'titleRu' => $this->title_ru,
                'titleEn' => $this->title_en,
                'titleKr' => $this->title_kr,
                'descriptionUz' => $this->description_uz,
                'descriptionRu' => $this->description_ru,
                'descriptionEn' => $this->description_en,
                'descriptionKr' => $this->description_ru,

            ])

        ];
    }
}
