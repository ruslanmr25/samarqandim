<?php


namespace App\Http\Filter;

class ExpeditionFilter extends BaseFilter
{


    protected array $generalColumns = ['id',  'created_at', 'updated_at', "image_path"];




    protected array $ColumnsDependOnLang = [
        "title",
        'body',
        "description"
    ];
}


//