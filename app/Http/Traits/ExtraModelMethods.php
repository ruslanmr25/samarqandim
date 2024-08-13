<?php

namespace App\Http\Traits;

use App\Http\Filter\BaseFilter;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;

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

    // protected static function booted()
    // {
    //     static::created(function ($model) {

    //         Log::channel('custom')->info(
    //             self::class . " Create. Id:{id} User: {user} Title {title} \n ",
    //             [
    //                 'id' => $model->id,
    //                 'user' => auth()->user()->username,
    //                 'userId' => auth()->user()->id,
    //                 'title' => $model->title_uz ?? $model->name_uz
    //             ]
    //         );
    //     });
    //     static::updated(function ($model) {

    //         $original = $model->getOriginal();
    //         $keys = $model->getDirty();
    //         $changes = $model->getChanges();

    //         $changedValues = array_map(
    //             function ($key) use ($original, $changes) {
    //                 return [
    //                     'old' => $original[$key] ?? null,
    //                     'new' => $changes[$key],
    //                 ];
    //             },
    //             array_keys($changes)
    //         );

    //         // Log yozish
    //         Log::channel('custom')->info(
    //             self::class . " Update .  Id:{id} User: {user} \n ",
    //             [
    //                 'model_id' => $model->id,
    //                 'user' => auth()->user()->username,
    //                 'userId' => auth()->user()->id,

    //                 'changedValues' => $changedValues,

    //             ]
    //         );
    //     });

    //     static::deleted(function ($model) {
    //         Log::channel('custom')->warning(
    //             self::class . " Delete.  Id:{id} User: {user} \n ",
    //             [
    //                 'id' => $model->id,
    //                 'user' => auth()->user()->username,
    //                 'userId' => auth()->user()->id,
    //             ]
    //         );
    //     });
    // }
}
