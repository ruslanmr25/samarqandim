<?php

namespace App\Http\Controllers;

use App\Http\Filter\SlideFilter;
use App\Models\Slide;
use App\Http\Requests\StoreSlideRequest;
use App\Http\Requests\UpdateSlideRequest;
use App\Http\Resources\SlideCollection;
use App\Http\Resources\SlideResource;
use Illuminate\Support\Facades\File;


class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SlideFilter $filter)
    {
        $slides = Slide::filter($filter)->get();

        return new SlideCollection($slides);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSlideRequest $request)
    {

        Slide::create($request->all());

        return $this->success();
    }

    /**
     * Display the specified resource.
     */
    // public function show(Slide $slide)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSlideRequest $request, Slide $slide)
    {

        $slide->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slide $slide)
    {
        // You have to delete this slide's images




        if (File::exists($slide->path)) {

            File::delete($slide->path);
        }
        $slide->delete();
    }
}
