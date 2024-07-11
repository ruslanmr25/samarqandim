<?php


namespace App\Http\Filter;

class NewsFilter extends BaseFilter
{
    protected array $generalColumns = ['id', 'category_id', 'views', 'status', 'created_at', 'updated_at', 'deletes_at'];
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
