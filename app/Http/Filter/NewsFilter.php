<?php


namespace App\Http\Filter;

class NewsFilter extends BaseFilter
{


    protected array $generalColumns = ['id', 'category_id', 'created_at', 'updated_at'];




    protected array $ColumnsDependOnLang = [
        "title",
        'body',
        "description"
    ];

    public function categoryId($value)
    {

        $this->builder->where('category_id', (int) $value);
    }
}


//