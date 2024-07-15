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

        return new NewsCollection(
            News::filter($newsFilter, ['body', 'status'])
                ->latest()
                ->with('images')
                ->paginate($newsFilter->perPage)
        );
    }


    /**
     * Store a newly created resource in storage.
     *
     * only signed admin
     */
    public function store(StoreNewsRequest $request)
    {
        News::create($request->all())
            ->images()
            ->create(['path' => $request->path]);

        return $this->success();
    }

    /**
     * Display the specified resource.
     *
     * all
     */
    public function show($news, NewsFilter $filter)
    {

        return
            $this->success(
                new NewsResource(News::FindByLang($news, $filter)->load('images'))
            );
    }


    /**
     *
     * only signed admin
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {


        /////////////////////////////////////////////////////////////////////////////////////////
        ////You must ask that when admin update the news , will it be all property given you?////
        /////////////////////////////////////////////////////////////////////////////////////////


        $news->update($request->all());

        return $this->success();
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
