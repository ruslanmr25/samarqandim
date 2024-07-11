<?php

namespace App\Http\Filter;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class BaseFilter
{


    protected Builder $builder;
    protected Request $request;

    protected string $lang;

    protected array $generalColumns = [];
    protected array $ColumnsDependOnLang = [];



    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->lang = $request->lang ?? 'uz';
    }

    public function apply(Builder $builder)
    {
        $this->builder = $builder;

        $this->setLanguage();

        foreach ($this->request->all() as $key => $value) {

            if (method_exists($this, $key)) {

                $this->$key($value);
            }
        }


        return $this->builder;
    }


    public function setLanguage()
    {



    

        return $this->builder->select(array_merge($this->generalColumns, $this->ColumnsDependOnLang[$this->lang]));
    }
}


//
