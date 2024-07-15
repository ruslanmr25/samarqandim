<?php

namespace App\Http\Filter;



class PageFilter extends BaseFilter
{

    protected array $generalColumns = ['id', 'created_at'];
    protected array $ColumnsDependOnLang = [

        'title',
        'body'

    ];
}
//
