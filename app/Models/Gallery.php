<?php

namespace App\Models;

use App\Http\Traits\ExtraModelMethods;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory,ExtraModelMethods,SoftDeletes;



    protected $fillable =
    [

        "title_uz",
        "title_ru",
        "title_en",
        "content_path",
        "type"
    ];
}
