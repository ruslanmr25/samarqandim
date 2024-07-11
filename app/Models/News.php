<?php

namespace App\Models;

use App\Http\Filter\BaseFilter;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'category_id',
        'title_uz',
        'title_en',
        'title_ru',
        'title_kr',
        'body_uz',
        'body_en',
        'body_ru',
        'body_kr',
        'status',
        'views',
        'deletes_at'
    ];

    protected $hidden = [
        'updated_at', 'deletes_at'
    ];


    public function scopeFilter(Builder $builder, BaseFilter $filter)
    {
        $filter->apply($builder);
    }






    public function category()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function images()
    {
        return $this->hasMany(NewsImage::class);
    }
}
