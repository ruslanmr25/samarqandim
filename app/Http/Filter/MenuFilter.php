<?php

namespace App\Http\Filter;


class MenuFilter extends BaseFilter
{




    protected array $generalColumns = ['id', 'path', 'level'];
    protected array $ColumnsDependOnLang = ['name'];


    public function primary()
    {

        return $this->builder->where('level', $this->request->level ?? 1);
    }

    public function withChildren()
    {
        $this->builder->with('children');
    }
}


//
