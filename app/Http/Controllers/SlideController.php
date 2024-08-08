<?php

namespace App\Http\Controllers;

use App\Http\Filter\SlideFilter;
use App\Models\Slide;
use App\Http\Requests\StoreSlideRequest;
use App\Http\Requests\UpdateSlideRequest;
use App\Http\Resources\SlideCollection;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

/**
 * @group Slide
 */
class SlideController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth:sanctum', 'permission:slide'])->only(['store', 'update', 'destroy']);
    }
    /**
     *  Get all slides
     * @queryParam status Sign of active or unactive Enum:1,0   No-example
     * @queryParam lang Enum:uz,kr,en,ru
     */
    public function index(SlideFilter $filter)
    {
        $slides = Slide::filter($filter)->get();

        return new SlideCollection($slides);
    }

    /**
     * Store new Slide
     */
    public function store(StoreSlideRequest $request)
    {
        // dd($request->all());

        Slide::create($request->all());

        return $this->success();
    }


    /**
     *  Update slide
     */
    public function update(UpdateSlideRequest $request, Slide $slide)
    {

        $slide->update($request->all());
    }

    /**
     * Delete slide
     */
    public function destroy(Slide $slide)
    {






        $file_path = substr($slide->imagePath, strpos($slide->imagePath, '/', 1));

        if (Storage::disk('public')->exists($file_path)) {

            Storage::disk('public')->delete($file_path);
        }
        $slide->delete();
        return $this->success();
    }
}
