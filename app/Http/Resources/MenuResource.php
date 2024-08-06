<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
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
            "name" => $this->name_en ?? $this->name_kr ?? $this->name_ru ?? $this->name_uz,

            "level" => $this->level,
            "path" => $this->path,
            "externalLink" => $this->external_link,
            "children" =>   MenuResource::collection($this->whenLoaded("children")),
            "hasPage" => $this->whenLoaded('page', $this->page()->id ?? null),


            $this->mergeWhen($request->lang == 'all', [
                'nameUz' => $this->name_uz,
                'nameRu' => $this->name_ru,
                'nameEn' => $this->name_en,
                'nameKr' => $this->name_kr,


            ])


        ];
    }
}
