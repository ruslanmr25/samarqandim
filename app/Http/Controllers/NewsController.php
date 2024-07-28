<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Data;
use App\Http\Filter\NewsFilter;
use App\Http\Resources\NewsCollection;
use App\Http\Resources\NewsResource;
use Illuminate\Support\Facades\File;

/**
 * @group News
 *
 *
 *
 */
class NewsController extends Controller
{



    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'permission:news'])->only(['store', 'update', 'destroy']);
    }

    /**
     *Get all news
     *
     * @queryParam perPage int . No-example
     * @queryParam lang string , in [uz,en,ru,kr]. No-example
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
     * Store news
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
     * Get News
     *
     * @queryParam lang string uz. No-example
     *
     *
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
     * Update news
     *
     */
    public function update(UpdateNewsRequest $request, News $news)
    {

        // return $request->all();
        $news->update($request->all());

        return $this->success();
    }

    /**
     *  Delete News
     *
     *
     */
    public function destroy(News $news)
    {
        if (File::exists($news->images()->first()->path)) {

            File::delete($news->images()->first()->path);
        }
        $news->delete();
        return $this->success();
    }
}
