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
        'path',
        'parent_id',
        "external_link",
        "priority"
    ];



    protected  $acceptedRelationships = [
        'children',
        'children.children',

    ];




    public function scopeFilter(Builder $builder, BaseFilter $filter)
    {

        $filter->apply($builder);
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


    public function getRelationshipData()
    {
        foreach ($this->acceptedRelationships as $relatinoship) {
            if ($this->include($relatinoship)) {

                $this->load($relatinoship);

                if ($relatinoship == 'children.children') {
                    // dd('asd');
                    $this->load('children.page');
                }
            }
        }
        $this->load('page');
    }
}
