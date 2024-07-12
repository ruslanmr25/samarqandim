<?php

namespace App\Models;

use App\Http\Traits\ExtraModelMethods;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory, ExtraModelMethods;

    protected $fillabe = [
        'menu_id',
        'title_uz',
        'title_en',
        'title_ru',
        'title_kr',
        'body_uz',
        'body_en',
        'body_ru',
        'body_kr'
    ];


    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
