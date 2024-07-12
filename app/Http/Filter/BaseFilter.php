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

        if (method_exists($this, 'primary')) {
            $this->primary();
        }

        foreach ($this->request->all() as $key => $value) {

            if (method_exists($this, $key)) {

                $this->$key($value);
            }
        }
        $this->builder->select($this->setLanguage());


        return $this->builder;
    }


    public function setLanguage()
    {


        return array_merge($this->generalColumns, $this->ColumnsDependOnLang[$this->lang]);
    }
}


//
