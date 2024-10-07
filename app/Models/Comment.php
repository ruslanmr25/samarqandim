<?php

namespace App\Models;

use App\Http\Traits\ExtraModelMethods;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory,ExtraModelMethods,SoftDeletes;


    protected $fillable = [
        "person_uz",
        "person_ru",
        "person_en",
        "description_ru",
        "description_en",
        "description_uz",

        'body_uz',
        'body_en',
        'body_ru',
        "image_path"


    ];
}