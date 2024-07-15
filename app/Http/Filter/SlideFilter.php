<?php

namespace App\Http\Filter;

class SlideFilter extends BaseFilter
{
    protected array $generalColumns = ['id',  'status', 'path', 'created_at',];
    protected array $ColumnsDependOnLang = ['title'];






    public function primary()
    {

        if ($this->request->status == null) {
            return $this->builder->where('status', 1);
        }
    }
}

//
