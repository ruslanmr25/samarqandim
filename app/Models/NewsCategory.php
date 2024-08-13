<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsCategory extends Model
{
    use HasFactory,SoftDeletes;


    protected $fillable = ["category"];


    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
