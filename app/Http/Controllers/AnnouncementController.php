<?php

namespace App\Http\Controllers;

use App\Http\Filter\AnnouncementFilter;
use App\Http\Resources\AnnouncementResource;
use App\Models\Announcement;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use App\Http\Resources\AnnouncementCollection;
use Illuminate\Support\Facades\File;

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
            Announcement::filter($filter, ['status', 'body'])
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
        if (File::exists($announcement->imagePath)) {

            File::delete($announcement->imagePath);
        }
        $announcement->delete();
        return $this->success();
    }
}
