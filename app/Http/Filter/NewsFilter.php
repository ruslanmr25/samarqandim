<?php


namespace App\Http\Filter;

class NewsFilter extends BaseFilter
{


    protected array $generalColumns = ['id', 'category_id', 'views',  'created_at', 'updated_at'];




    protected array $ColumnsDependOnLang = [
        "title",
        'body'
    ];

    public function categoryId($value)
    {

        $this->builder->where('category_id', (int) $value);
    }
}


//
