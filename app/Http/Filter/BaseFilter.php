<?php

namespace App\Http\Filter;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;


/**
 * @method void primary()
 */
class BaseFilter
{
    public $perPage;

    protected Builder $builder;
    protected Request $request;

    protected string $lang;

    protected array $generalColumns = [];
    protected array $ColumnsDependOnLang = [];

    protected array $guardedMethod = ['apply', 'select', 'addLangToColumn', 'setLanguage', 'primary'];

    public function __construct(Request $request)
    {

        $this->lang = $request->lang ?? 'uz';
        $this->perPage = ($request->perPage && $request->perPage < 100) ? (int)$request->perPage : 15;
        $this->request = $request;
    }

    public function apply(Builder $builder, $unnecessaryColumns = [])
    {
        $this->builder = $builder;

        // checking primary method andd call it
        if (method_exists($this, 'primary')) {
            $this->primary();
        }

        //call filters
        foreach ($this->request->all() as $key => $value) {

            if (method_exists($this, $key) && !in_array($key, $this->guardedMethod)) {

                $this->$key($value);
            }
        }

        //select columns
        $this->builder->select($this->setLanguage($unnecessaryColumns));



        return $this->builder;
    }





    protected function addLangToColumn($unnecessary)
    {

        return array_map(
            function ($column) {
                return $column . '_' . $this->lang;
            },
            array_diff($this->ColumnsDependOnLang, $unnecessary)

        );
    }


    public function setLanguage($unnecessary = [], $ignoreGetAll = true)
    {


        if ($this->lang == 'all' && !$ignoreGetAll) {
            return ['*'];
        }
        if ($this->lang == 'all') {
            $this->lang = 'uz';
        }
        // do not select unnecessary columns
        $generalColumns = array_diff($this->generalColumns, $unnecessary);


        return array_merge($generalColumns, $this->addLangToColumn($unnecessary));
    }
}
