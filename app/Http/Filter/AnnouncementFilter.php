<?php

namespace App\Http\Filter;

class AnnouncementFilter extends BaseFilter
{

    protected array $generalColumns = ['id',  'created_at', 'updated_at', 'imagePath'];




    protected array $ColumnsDependOnLang = [
        "title",
        'body',
        "description"
    ];
}


//
