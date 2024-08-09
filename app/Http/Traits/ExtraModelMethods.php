<?php

namespace App\Http\Traits;

use App\Http\Filter\BaseFilter;
use Illuminate\Contracts\Database\Eloquent\Builder;

trait ExtraModelMethods
{
    public function scopeFilter(Builder $builder, BaseFilter $filter, array $unnecessaryColumns = [])
    {

        $filter->apply($builder, $unnecessaryColumns);
    }



    public static function FindByLang($id, BaseFilter $filter, $column = "id")
    {

        return self::where($column, $id)->firstOrFail($filter->setLanguage(ignoreGetAll: false));
    }


    public function include(string $relationship): bool
    {
        $param = request()->get('include');

        if (!isset($param)) {
            return false;
        }
        $includeValues = explode(',', strtolower($param));
        return in_array(strtolower($relationship), $includeValues);
    }
}
