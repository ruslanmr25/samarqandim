<?php

namespace App\Models;

use App\Http\Filter\BaseFilter;
use App\Http\Traits\ExtraModelMethods;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    use HasFactory, ExtraModelMethods;

    protected $fillable = [
        'name_uz',
        'name_en',
        'name_ru',
        'name_kr',
        'level',
        'path'
    ];

    public function scopeFilter(Builder $builder, BaseFilter $filter)
    {

        $filter->apply($builder);
    }

    public static function FindByLang($id, BaseFilter $filter)
    {

        return self::findOrFail($id, $filter->setLanguage());
    }




    //own relationships
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }
    //forein relation
    public function page()
    {
        return $this->hasOne(Page::class);
    }
}
