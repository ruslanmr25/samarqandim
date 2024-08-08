<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_uz',
        'title_kr',
        'title_en',
        'title_ru',
        'description_uz',
        'description_en',
        'description_ru',
        'description_kr',
        'body_uz',
        'body_en',
        'body_ru',
        'body_kr',
        'status',
        'imagePath',
    ];
}
