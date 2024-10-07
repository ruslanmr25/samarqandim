<?php

namespace App\Http\Filter;

class SlideFilter extends BaseFilter
{
    protected array $generalColumns = ['id',  'imagePath', 'created_at', 'path'];
    protected array $ColumnsDependOnLang = ['title', 'description'];
}

//