<?php

namespace App\Http\Controllers;

use App\Http\Filter\GalleryContentFilter;
use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Http\Resources\GalleryContentCollection;

class GalleryController extends Controller
{



    public function __construct()
    {

        $this->middleware(["auth:sanctum"])->except("index");
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
    public function store(StoreGalleryRequest $request, $type)
    {

        Gallery::create($request->all());

        return $this->success();
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, $type,  $gallery)
    {


        Gallery::findOrFail($gallery)->update($request->all());


        return $this->success();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($type,  $gallery)
    {

        Gallery::findOrFail($gallery)->delete();


        $this->success();
    }
}
