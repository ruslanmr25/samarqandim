<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Data;
use App\Http\Filter\NewsFilter;
use App\Http\Resources\NewsCollection;
use App\Http\Resources\NewsResource;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * All can see
     */
    public function index(NewsFilter $newsFilter)
    {

        // return $this->success();


        return new NewsCollection(News::filter($newsFilter)->paginate(10));
    }


    /**
     * Store a newly created resource in storage.
     *
     * only signed admin
     */
    public function store(StoreNewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * all
     */
    public function show(News $news)
    {
        //
    }


    /**
     *
     * only signed admin
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * only signed admin
     */
    public function destroy(News $news)
    {
        //
    }
}
