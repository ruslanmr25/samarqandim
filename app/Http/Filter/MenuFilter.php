<?php

namespace App\Http\Filter;

/**
 * @method array setLanguage()
 */
class MenuFilter extends BaseFilter
{

    protected array $generalColumns = ['id', 'path', 'level', 'parent_id', 'external_link','created_at','priority'];
    protected array $ColumnsDependOnLang = ['name'];


    public function primary()
    {

        return $this->builder->where('level', $this->request->level ?? 1);
    }



}
