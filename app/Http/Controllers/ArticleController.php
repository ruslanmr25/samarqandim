<?php

namespace App\Http\Controllers;

use App\Http\Filter\ArticleFilter;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Resources\ArticleCollection;

/**
 * @group Article
 */
class ArticleController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth:sanctum'])->only(['store', 'update', 'destroy']);
    }
    /**
     *@name Get Articles
     */
    public function index(ArticleFilter $filter)
    {

        return new ArticleCollection(
            Article::filter($filter, ['body'])
                ->latest()
                ->paginate($filter->perPage)
        );
    }

    /**
     * @name Create Article
     *
     */
    public function store(StoreArticleRequest $request)
    {
        Article::create($request->all());
        return $this->success();
    }

    /**
     * @name Get Article
     */
    public function show($Article, ArticleFilter $filter)
    {
        $Article = Article::FindByLang($Article, $filter);

        return $this->resource(new ArticleResource($Article));
    }

    /**
     * @name Update Article
     */
    public function update(UpdateArticleRequest $request, Article $Article)
    {
        $Article->update($request->all());
        return $this->success();
    }

    /**
     * @name Delete Article
     */
    public function destroy(Article $Article)
    {

        // $file_path = substr($Article->imagePath, strpos($Article->imagePath, '/', 1));

        // if (Storage::disk('public')->exists($file_path)) {

        //     Storage::disk('public')->delete($file_path);
        // }
        $Article->delete();
        return $this->success();
    }
}