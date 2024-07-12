<?php

namespace App\Http\Traits;

use App\Http\Filter\BaseFilter;
use Illuminate\Contracts\Database\Eloquent\Builder;

trait ExtraModelMethods
{
    public function scopeFilter(Builder $builder, BaseFilter $filter)
    {

        $filter->apply($builder);
    }

    public static function FindByLang($id, BaseFilter $filter, $column = "id")
    {

        return self::where($column, $id)->firstOrFail($filter->setLanguage());
    }
}

//
