<?php

namespace App\Http\Filter;

class ArticleFilter extends BaseFilter
{

    protected array $generalColumns = ['id',  'created_at', 'updated_at', 'imagePath'];




    protected array $ColumnsDependOnLang = [
        "title",
        'body',
        "description"
    ];
}


//