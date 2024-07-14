<?php

namespace App\Http\Filter;

class SlideFilter extends BaseFilter
{
    protected array $generalColumns = ['id',  'status', 'path', 'created_at',];
    protected array $ColumnsDependOnLang = [
        'uz' => [
            'title_uz',
        ],
        'en' => [
            'title_en',
        ],
        'ru' => [
            'title_ru',
        ],
        'kr' => [
            'title_kr',
        ]
    ];



    public function primary()
    {

        if ($this->request->status == null) {
            return $this->builder->where('status', 1);
        }
    }
}

//
