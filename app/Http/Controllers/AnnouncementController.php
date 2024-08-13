<?php

namespace App\Http\Controllers;

use App\Http\Filter\AnnouncementFilter;
use App\Http\Resources\AnnouncementResource;
use App\Models\Announcement;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use App\Http\Resources\AnnouncementCollection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

/**
 * @group Announcement
 */
class AnnouncementController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth:sanctum', 'permission:announcement'])->only(['store', 'update', 'destroy']);
    }
    /**
     *@name Get Announcements
     */
    public function index(AnnouncementFilter $filter)
    {

        return new AnnouncementCollection(
            Announcement::filter($filter, ['body'])
                ->latest()
                ->paginate($filter->perPage)
        );
    }

    /**
     * @name Create Announcement
     *
     */
    public function store(StoreAnnouncementRequest $request)
    {
        Announcement::create($request->all());

        return $this->success();
    }

    /**
     * @name Get Announcement
     */
    public function show($announcement, AnnouncementFilter $filter)
    {
        $announcement = Announcement::FindByLang($announcement, $filter);

        return $this->resource(new AnnouncementResource($announcement));
    }

    /**
     * @name Update Announcement
     */
    public function update(UpdateAnnouncementRequest $request, Announcement $announcement)
    {
        $announcement->update($request->all());
        return $this->success();
    }

    /**
     * @name Delete Announcement
     */
    public function destroy(Announcement $announcement)
    {

        // $file_path = substr($announcement->imagePath, strpos($announcement->imagePath, '/', 1));

        // if (Storage::disk('public')->exists($file_path)) {

        //     Storage::disk('public')->delete($file_path);
        // }
        $announcement->delete();
        return $this->success();
    }
}
