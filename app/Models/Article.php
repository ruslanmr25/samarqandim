<?php

namespace App\Models;

use App\Http\Traits\ExtraModelMethods;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, ExtraModelMethods, SoftDeletes;
    protected $fillable = [
        'title_uz',

        'title_en',
        'title_ru',
        'description_uz',
        'description_en',
        'description_ru',

        'body_uz',
        'body_en',
        'body_ru',


        'imagePath',
    ];
}