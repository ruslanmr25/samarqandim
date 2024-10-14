<?php


namespace App\Http\Filter;

class GalleryContentFilter extends BaseFilter
{


    protected array $generalColumns = ['id', "type", "content_path", 'created_at', 'updated_at'];




    protected array $ColumnsDependOnLang = [
        "title",

    ];

    public function primary() {}


    public function type()
    {
        $this->builder->where("type", $this->request->type);
    }
}


//