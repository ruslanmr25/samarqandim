<?php

namespace App\Models;

use App\Http\Traits\ExtraModelMethods;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expedition extends Model
{
    use HasFactory,SoftDeletes,ExtraModelMethods;



    protected $fillable = [
        'title_uz',
        'title_en',
        'title_ru',

        'body_uz',
        'body_en',
        'body_ru',

        "description_uz",
        "description_ru",

        "image_path",
        "description_en"

    ];
}
