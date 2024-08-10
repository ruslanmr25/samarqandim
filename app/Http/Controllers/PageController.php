<?php

namespace App\Http\Controllers;

use App\Http\Filter\PageFilter;
use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Http\Resources\PageResource;
use App\Models\Menu;

/**
 * @group Page
 */
class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'permission:page'])->only(['store', 'update', 'destroy']);
    }

    /**
     * Store  page
     */
    public function store(StorePageRequest $request)
    {

        $menu = Menu::where('path', $request->menu)->first();
        //checking that menu does not have double page
        if ($menu->page) {
            return $this->error("This menu already has a page");
        }
        $menu->page()->create($request->all());

        return $this->success();
    }

    /**
     * Get Page
     *
     */
    public function show(Menu $menu, PageFilter $filter)
    {

        return $this->resource(
            new PageResource(Page::FindByLang($menu->id, $filter, 'menu_id'))
        );
    }



    /**
     * Update Page
     */
    public function update(UpdatePageRequest $request, Menu $menu)
    {
        $menu->page->update($request->all());

        return $this->success();
    }

    /**
     * Delete Page
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return $this->success();
    }
}
