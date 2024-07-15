<?php


namespace App\Http\Filter;

class NewsFilter extends BaseFilter
{


    protected array $generalColumns = ['id', 'category_id', 'views', 'status', 'created_at', 'updated_at', 'deletes_at'];




    protected array $ColumnsDependOnLang = [
        "title",
        'body'
    ];
}


//
