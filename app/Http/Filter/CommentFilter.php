<?php


namespace App\Http\Filter;

class CommentFilter extends BaseFilter
{


    protected array $generalColumns = ['id', 'image_path', 'created_at', 'updated_at'];




    protected array $ColumnsDependOnLang = [
        "person",
        'body',
        "description"
    ];
}


//