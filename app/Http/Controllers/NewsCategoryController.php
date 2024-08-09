<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;

use App\Http\Resources\NewsCategoryCollection;


/**
 * @group News Category
 */
class NewsCategoryController extends Controller
{


    /**
     *
     *
     * Get all news category
     */
    public function index()
    {
        return new NewsCategoryCollection(NewsCategory::all());
    }
}
