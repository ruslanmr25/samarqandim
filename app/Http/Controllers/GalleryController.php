<?php

namespace App\Http\Controllers;

use App\Http\Filter\GalleryContentFilter;
use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Http\Resources\GalleryContentCollection;
use App\Http\Resources\GalleryContentResource;
use Illuminate\Mail\Mailables\Content;

class GalleryController extends Controller
{



    public function __construct()
    {

        $this->middleware(["auth:sanctum"])->except(["index", "show"]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(GalleryContentFilter $filter)
    {
        return new GalleryContentCollection(
            Gallery::filter($filter)->latest()->paginate($filter->perPage)
        );
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {

        Gallery::create($request->all());

        return $this->success();
    }

    /**
     * Display the specified resource.
     */
    public function show($content, GalleryContentFilter $filter)
    {
        $content = Gallery::FindByLang($content, $filter);


        return
            $this->resource(
                new GalleryContentResource($content)
            );
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request,  $content)
    {


        Gallery::findOrFail($content)->update($request->all());


        return $this->success();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery  $content)
    {
        $content->delete();


        return $this->success();
    }
}
