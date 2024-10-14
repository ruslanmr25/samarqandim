<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GalleryContentResource extends JsonResource
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

            "contentPath" => $this->content_path,
            "type" => $this->type,
            "createdAt" => $this->created_at,

            $this->mergeWhen($request->lang == 'all', [
                'titleUz' => $this->title_uz,
                'titleRu' => $this->title_ru,
                'titleEn' => $this->title_en,

            ])


        ];
    }
}
