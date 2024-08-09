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
use Illuminate\Support\Facades\Storage;

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
        // $this->middleware('CheckNewsCategoryAccess')->only('store');
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
            ->create(['path' => $request->imagePath]);

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
        $news = News::FindByLang($news, $filter)->load(['images']);

        $news->update([
            'views' => $news->views + 1
        ]);

        return
            $this->resource(
                new NewsResource($news)
            );
    }


    /**
     *
     * Update news
     *
     */
    public function update(UpdateNewsRequest $request, News $news)
    {


        $news->update($request->all());
        $news->images()->first()->update([
            'path' => $request->imagePath
        ]);

        return $this->success();
    }

    /**
     *  Delete News
     *
     *
     */
    public function destroy(News $news)
    {
        $file_path = substr($news->images()->first()->path, strpos($news->images()->first()->path, '/', 1));

        if (Storage::disk('public')->exists($file_path)) {

            Storage::disk('public')->delete($file_path);
        }
        $news->delete();
        return $this->success();
    }
}
