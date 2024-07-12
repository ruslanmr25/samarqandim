<?php

namespace App\Http\Filter;



class PageFilter extends BaseFilter
{

    protected array $generalColumns = ['id', 'created_at'];
    protected array $ColumnsDependOnLang = [
        'uz' => [
            'title_uz',
            'body_uz',
        ],
        'en' => [
            'title_en',
            'body_en',
        ],
        'ru' => [
            'title_ru',
            'body_ru'
        ],
        'kr' => [
            'title_kr',
            'body_kr'
        ]
    ];
}
//
