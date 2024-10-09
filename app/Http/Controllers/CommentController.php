<?php

namespace App\Http\Controllers;

use App\Http\Filter\CommentFilter;
use App\Http\Filter\NewsFilter;
use App\Http\Resources\CommentCollection;
use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Resources\CommentResource;

class CommentController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth:sanctum',])->only(['store', 'update', 'destroy']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(CommentFilter $filter)
    {
        return new CommentCollection(
            Comment::filter($filter)->latest()->paginate($filter->perPage)
        );
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {

        ///is this all required or not?

        Comment::create($request->all());

        return $this->success();
    }

    /**
     * Display the specified resource.
     */
    public function show($comment, CommentFilter $filter)
    {
        $comment = Comment::FindByLang($comment, $filter);


        return $this->resource(new CommentResource($comment));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $comment->update($request->all());

        return $this->success();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();


        return $this->success();
    }
}
