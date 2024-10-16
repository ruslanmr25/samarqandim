<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
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
            "title" => $this->title_uz ?? $this->title_en ?? $this->title_kr ?? $this->title_ru,

            "body" => $this->whenNotNull($this->body_uz ?? $this->body_en ?? $this->body_kr ?? $this->body_ru),
            "status" => $this->whenNotNull($this->status),
            "views" => $this->views,
            "imagePath" => $this->whenLoaded("images", $this->images[0]->path ?? null),
            "createdAt" => $this->created_at,

            "categoryId" => $this->category_id,



            $this->mergeWhen($request->lang == 'all', [
                'titleUz' => $this->title_uz,
                'titleRu' => $this->title_ru,
                'titleEn' => $this->title_en,
                'titleKr' => $this->title_kr,
                'bodyUz' => $this->body_uz,
                'bodyRu' => $this->body_ru,
                'bodyEn' => $this->body_en,
                'bodyKr' => $this->body_ru,

            ])


        ];
    }
}
