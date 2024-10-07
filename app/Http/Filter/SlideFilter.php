<?php

namespace App\Http\Filter;

class SlideFilter extends BaseFilter
{
    protected array $generalColumns = ['id',  'image_path', 'created_at', ];
    protected array $ColumnsDependOnLang = ['title', 'description'];
}

//
