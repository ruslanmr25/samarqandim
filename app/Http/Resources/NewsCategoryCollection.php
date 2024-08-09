<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class NewsCategoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "success" => true,
            "message" => "The operation was done successfully!",
            "result" => [
                "data" => $this->collection,
                // "meta" =>  [
                //     'currentPage' => $this->currentPage(),
                //     'perPage' => $this->perPage(),
                //     'lastPage' => $this->lastPage(),
                //     'total' => $this->total()
                // ]
            ]
        ];
    }
}
