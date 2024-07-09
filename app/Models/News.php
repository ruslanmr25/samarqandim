<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

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






    public function category()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function images()
    {
        return $this->hasMany(NewsImage::class);
    }
}
