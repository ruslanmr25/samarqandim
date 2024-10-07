<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            "person" => $this->person_uz ?? $this->person_en  ?? $this->person_ru,

            "body" => $this->whenNotNull($this->body_uz ?? $this->body_en  ?? $this->body_ru),

            "description" => $this->whenNotNull($this->description_uz ?? $this->description_en ?? $this->description_ru),

            "imagePath" => $this->image_path,
            "createdAt" => $this->created_at,


            $this->mergeWhen($request->lang == 'all', [
                'personUz' => $this->person_uz,
                'personRu' => $this->person_ru,
                'personEn' => $this->person_en,



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
