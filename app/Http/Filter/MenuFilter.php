<?php

namespace App\Http\Filter;


class MenuFilter extends BaseFilter
{




    protected array $generalColumns = ['id', 'path', 'level'];
    protected array $ColumnsDependOnLang = [
        'uz' => [
            'name_uz',

        ],
        'en' => [
            'name_en',

        ],
        'ru' => [
            'name_ru',

        ],
        'kr' => [
            'name_kr',

        ]
    ];


    public function primary()
    {

        return $this->builder->where('level', $this->request->level ?? 1);
    }
}


//
