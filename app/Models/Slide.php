<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slide extends Model
{
    use HasFactory,SoftDeletes;


    protected $fillable = [
        'title_uz',
        'title_en',
        'title_ru',
        'title_kr',
        'imagePath',
        'path',
        'description_kr',
        'description_ru',
        'description_en',
        'description_uz'

    ];
}