<?php

namespace App\Models;

use App\Http\Filter\BaseFilter;
use App\Http\Traits\ExtraModelMethods;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, ExtraModelMethods,SoftDeletes;



    /////////////////////////////////////////////////////////////////
    //// Do not forget about do this true after you add old news ////
    /////////////////////////////////////////////////////////////////

    // public $timestamps = true;

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
        
        'views',

    ];

    protected $hidden = [
        'updated_at',
    ];


    public function category()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function images()
    {
        return $this->hasMany(NewsImage::class);
    }
}
