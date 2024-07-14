<?php

namespace App\Models;

use App\Http\Traits\ExtraModelMethods;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory, ExtraModelMethods;


    protected $fillable = [
        'title_uz',
        'title_en',
        'title_ru',
        'title_kr',
        'path',
        'status'

    ];
}
