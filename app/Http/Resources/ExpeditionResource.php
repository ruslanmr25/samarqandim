<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExpeditionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            "id" => $this->id,
            "title" => $this->title_uz ?? $this->title_en  ?? $this->title_ru,

            "body" => $this->whenNotNull($this->body_uz ?? $this->body_en  ?? $this->body_ru),

            "description" => $this->whenNotNull($this->description_uz ?? $this->description_en ?? $this->description_ru),

            "imagePath" => $this->image_path,
            "createdAt" => $this->created_at,



            $this->mergeWhen($request->lang == 'all', [
                'titleUz' => $this->title_uz,
                'titleRu' => $this->title_ru,
                'titleEn' => $this->title_en,


                'bodyUz' => $this->body_uz,
                'bodyRu' => $this->body_ru,
                'bodyEn' => $this->body_en,

                "descriptionUz" => $this->description_uz,
                "descriptionRu" => $this->description_ru,
                "descriptionEn" => $this->description_en,



            ])


        ];
    }
}